<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdImage;
use App\Models\Ad;
use App\Models\Image;

class AdImageController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request, Ad $ad)
    {
    	return view('ads_images.index', compact('ad'));
    }

    public function create(Request $request, Ad $ad)
    {
        return view('ads_images.create', compact('ad'));
    }

    public function show(Request $request, AdImage $adImage)
    {
        $user = $request->user();

        return view('ads_images.show', compact('adImage'));
    }
}
