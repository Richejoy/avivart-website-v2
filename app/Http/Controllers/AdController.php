<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('ads.index');
    }

    public function show(Request $request, int $ad)
    {
        return view('ads.show');
    }
}
