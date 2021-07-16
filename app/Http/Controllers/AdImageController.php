<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdImage;

class AdImageController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('ads_images.index');
    }

    public function show(Request $request, AdImage $adImage)
    {
        $user = $request->user();

        return view('ads_images.show', compact('adImage'));
    }
}
