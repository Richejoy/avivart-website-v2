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

class AdController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$adRays = AdRay::all();

        $adTypes = AdType::inRandomOrder()->get();

        $vipAds = Ad::where(['published' => true, 'is_vip' => true])->inRandomOrder()->get();
        $latestAds = Ad::where('published', true)->inRandomOrder()->take(8)->orderBy('id' ,'DESC')->get();
        $ads = Ad::where('published', true)->inRandomOrder()->get();

        return view('ads.index', compact('adRays', 'adTypes', 'vipAds', 'latestAds', 'ads'));
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
                    'published' => false,
                    'expire_date' => now(),
                ]
            ));

            flashy()->success('Votre annonce à été ajouter. Veuillez attendre sa validation');
        }

        return redirect()->route('user.ads');
    }

    public function show(Request $request, Ad $ad)
    {
        $adsImages = AdImage::where('ad_id', $ad->id)->get();

        return view('ads.show', compact('ad', 'adsImages'));
    }

    public function edit(Request $request, Ad $ad)
    {
        $adCategories = AdCategory::all()->sortBy('id')->pluck(null, 'id');
        $adTypes = AdType::all()->sortBy('id')->pluck(null, 'id');
        $currencies = Currency::all()->sortBy('id')->pluck(null, 'id');

        return view('ads.edit', compact('ad', 'adCategories', 'adTypes', 'currencies'));
    }

    public function update(Request $request, Ad $ad)
    {
        $user = $request->user();

        if ($user->id != $ad->user_id) {
            return back()->withDanger("Erreur interne");
        }

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

            flashy()->success('Annonce mise à jour');
        }

        return redirect()->route('user.ads');
    }

    public function destroy(Request $request, Ad $ad)
    {
        return back();
    }

    public function guide(Request $request)
    {
        return view('ads.guide');
    }

    public function search(Request $request)
    {
        $query = Ad::where('published', true);

        if ($request->has('ad_category_id')) {
            
            if ($request->query('ad_category_id') > 0) {
                $query = $query->where(['ad_category_id' => $request->query('ad_category_id')]);
            }

            if ($request->has('name')) {
                $query = $query->where('name', 'LIKE', '%' . $request->query('name') . '%');
            }
        }

        $ads = $query->get();

        return view('ads.search', compact('ads'));
    }
}
