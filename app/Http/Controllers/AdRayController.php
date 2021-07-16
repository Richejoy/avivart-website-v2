<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdRay;

class AdRayController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$adRays = AdRay::paginate(4);

    	return view('ad_rays.index', compact('adRays'));
    }

    public function show(Request $request, AdRay $adRay)
    {
        $adRays = AdRay::all();

    	return view('ad_rays.show', compact('adRay', 'adRays'));
    }
}
