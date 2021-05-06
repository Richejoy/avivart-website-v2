<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CosmeticController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('cosmetics.index');
    }
}
