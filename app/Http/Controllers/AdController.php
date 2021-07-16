<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdCategory;
use App\Models\AdRay;
use App\Models\AdType;
use App\Models\Ad;
use App\Models\AdImage;

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
        return view('ads.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            // code...
        }

        return back();
    }

    public function show(Request $request, Ad $ad)
    {
        $adsImages = AdImage::where('ad_id', $ad->id)->get();

        return view('ads.show', compact('ad', 'adsImages'));
    }

    public function edit(Request $request, Ad $ad)
    {
        return view('ads.edit', compact('ad'));
    }

    public function update(Request $request, Ad $ad)
    {
        if ($request->isMethod('PUT')) {
            // code...
        }

        return back();
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
