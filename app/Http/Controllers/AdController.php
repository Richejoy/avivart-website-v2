<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdCategory;
use App\Models\AdRay;
use App\Models\AdType;
use App\Models\Ad;
use App\Models\Currency;
use App\Models\AdImage;
use App\Models\Image;
use App\Models\Formula;
use App\Models\AdFormula;
use App\Models\Communication;
use MercurySeries\Flashy\Flashy;
use Carbon\Carbon;

class AdController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$adRays = AdRay::with('adCategories')->get();

        $adTypes = AdType::inRandomOrder()
        ->get();

        $vipAds = Ad::with('image', 'currency', 'user.country')
        ->where(['published' => true, 'is_vip' => true])
        ->inRandomOrder()
        ->get();

        $latestAds = Ad::with('image', 'currency', 'user.country')
        ->where('published', true)
        ->inRandomOrder()
        ->take(8)
        ->orderBy('id' ,'DESC')
        ->get();

        $ads = Ad::with('image', 'currency', 'user.country')
        ->where('published', true)
        ->inRandomOrder()
        ->get();

        $communications = Communication::with('communicationCategory', 'user.userType', 'user.country')
        ->where('published', true)
        ->inRandomOrder()
        ->get();

        return view('ads.index', compact('adRays', 'adTypes', 'vipAds', 'latestAds', 'ads', 'communications'));
    }

    public function create(Request $request)
    {
        $adCategories = AdCategory::all()->sortBy('id')->pluck(null, 'id');
        $adTypes = AdType::all()->sortBy('id')->pluck(null, 'id');
        $currencies = Currency::all()->sortBy('id')->pluck(null, 'id');

        return view('ads.create', compact('adCategories', 'adTypes', 'currencies'));
    }

    public function store(Request $request)
    {
        $user = $request->user();

        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'name' => ['required', 'bail', 'min:6'],
                'description' => ['required', 'bail', 'min:6'],
                'characteristics' => ['required', 'bail', 'min:10'],
                'price' => ['required', 'bail'],
                'ad_category_id' => ['required', 'bail'],
                'ad_type_id' => ['required', 'bail'],
                'currency_id' => ['required', 'bail'],
            ]);

            $image = Image::create([
                'folder' => 'ads',
                'url' => 'default.jpg',
                'link' => 'https://avivart.net/images/ads/default.jpg',
                'description' => $request->name,
            ]);

            $ad = Ad::create(array_merge(
                $request->all(),
                [
                    'user_id' => $user->id,
                    'image_id' => $image->id,
                    'is_vip' => false,
                    'published' => true,
                    'expire_date' => now(),
                ]
            ));

            flashy()->success('Votre annonce ?? ??t?? ajouter. Veuillez attendre sa validation');
        }

        return redirect()->route('image.edit', ['image' => $ad->image->id]);
    }

    public function show(Request $request, Ad $ad)
    {
        $adsImages = AdImage::where('ad_id', $ad->id)->get();

        return view('ads.show', compact('ad', 'adsImages'));
    }

    public function edit(Request $request, Ad $ad)
    {
        abort_if((auth()->id() != $ad->user_id), 401, 'Unauthorized');
        
        $adCategories = AdCategory::all()->sortBy('id')->pluck(null, 'id');
        $adTypes = AdType::all()->sortBy('id')->pluck(null, 'id');
        $currencies = Currency::all()->sortBy('id')->pluck(null, 'id');

        return view('ads.edit', compact('ad', 'adCategories', 'adTypes', 'currencies'));
    }

    public function update(Request $request, Ad $ad)
    {
        if ($request->isMethod('PUT')) {
            $this->validate($request, [
                'name' => ['required', 'bail', 'min:6'],
                'description' => ['required', 'bail', 'min:6'],
                'characteristics' => ['required', 'bail', 'min:10'],
                'price' => ['required', 'bail'],
                'ad_category_id' => ['required', 'bail'],
                'ad_type_id' => ['required', 'bail'],
                'currency_id' => ['required', 'bail'],
            ]);
            
            $ad->update($request->all());

            flashy()->success('Annonce mise ?? jour');
        }

        return redirect()->route('image.edit', ['image' => $ad->image->id]);
    }

    public function destroy(Request $request, Ad $ad)
    {
        return back();
    }

    public function guide(Request $request)
    {
        return view('ads.guide');
    }

    public function booster(Request $request, Ad $ad)
    {
        abort_if((auth()->id() != $ad->user_id), 401, 'Unauthorized');
        
        $formulas = Formula::all()->sortBy('id')->pluck(null, 'id');

        if ($request->isMethod('POST')) {

            $this->validate($request, [
                'formula_id' => ['bail', 'required'],
            ]);

            $formula = Formula::findOrFail($request->formula_id);

            $adFormula = AdFormula::create([
                'ad_id' => $ad->id,
                'formula_id' => $formula->id,
            ]);

            /**/
            $callbackURL = route('payment.callback_url');
            $returnURL = route('payment.return_url');
            $cancelURL = route('payment.cancel_url');

            $paygateURL = self::PAYGATE_URL;
            $token = self::PAYGATE_TOKEN;
            $identifier = mb_substr(uniqid(date('YmdHis') . $ad->id ), 0, 25);
            $amount = str_replace(',', '', $formula->amount);    //very important
            /**/

            session()->put('ad_id', $ad->id);
            session()->put('formula_id', $formula->id);

            $queryString = [
                "amount={$amount}",
                "token={$token}",
                "description=Boostage de l'annonce {$ad->name}",
                "identifier={$identifier}",
                "url={$returnURL}",
            ];

            return redirect($paygateURL . implode('&', $queryString));
        }

        return view('ads.booster', compact('ad', 'formulas'));
    }

    public function search(Request $request)
    {
        $ads = Ad::with('image', 'currency', 'user.country')
        ->where('published', true)
        ->when($request->has('ad_category_id'), function($query) use ($request) {
            if (intval($request->query('ad_category_id')) > 0) {
                $query->where('ad_category_id', $request->query('ad_category_id'));
            }

            if ($request->has('name')) {
                $query->where('name', 'LIKE', '%' . $request->query('name') . '%');
            }
        })
        ->get();

        return view('ads.search', compact('ads'));
    }

    public function automobile(Request $request)
    {
        $adCategories = AdCategory::where('ad_ray_id', 1)->get();

        $ads = $this->_getFilterAds(1);

        return view('ads.automobile', compact('adCategories', 'ads'));
    }

    public function immovable(Request $request)
    {
        $adCategories = AdCategory::where('ad_ray_id', 2)->get();

        $ads = $this->_getFilterAds(2);

        return view('ads.immovable', compact('adCategories', 'ads'));
    }

    public function cosmetic(Request $request)
    {
        $adCategories = AdCategory::where('ad_ray_id', 3)->get();

        $ads = $this->_getFilterAds(3);

        return view('ads.cosmetic', compact('adCategories', 'ads'));
    }

    public function agribusiness(Request $request)
    {
        $adCategories = AdCategory::where('ad_ray_id', 4)->get();

        $ads = $this->_getFilterAds(4);

        return view('ads.agribusiness', compact('adCategories', 'ads'));
    }

    public function otherAds(Request $request)
    {
        $adCategories = AdCategory::where('ad_ray_id', 5)->get();

        $ads = $this->_getFilterAds(5);

        return view('ads.other_ads', compact('adCategories', 'ads'));
    }

    /**
     * 
     */
    private function _getFilterAds(int $rayId)
    {
        return Ad::with('image', 'currency', 'user.country')
        ->where('published', true)
        ->whereHas('adCategory', function($query) use ($rayId) {
            
            $query->whereHas('adRay', function($query) use ($rayId) {
                $query->where('id', $rayId);
            });

        })
        ->when(request('ad_category_id'), fn($query) => $query->where('ad_category_id', request('ad_category_id')))
        ->paginate(self::PAGINATION_NUMBER);
    }
}
