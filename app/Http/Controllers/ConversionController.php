<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversion;

class ConversionController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$conversions = Conversion::all();

    	return view('conversions.index', compact('conversions'));
    }

    public function show(Request $request, Conversion $conversion)
    {
    	return view('conversions.show', compact('conversion'));
    }
}
