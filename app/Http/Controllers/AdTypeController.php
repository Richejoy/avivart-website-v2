<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdType;

class AdTypeController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$adTypes = AdType::paginate(4);

    	return view('ad_types.index', compact('adTypes'));
    }

    public function show(Request $request, AdType $adType)
    {
        $adTypes = AdType::all();

    	return view('ad_types.show', compact('adType', 'adTypes'));
    }
}
