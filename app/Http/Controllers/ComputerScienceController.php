<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerScienceController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('informatics.index');
    }

    public function solutions(Request $request)
    {
        return view('informatics.solutions');
    }

    public function networks(Request $request)
    {
        return view('informatics.networks');
    }

    public function databases(Request $request)
    {
        return view('informatics.databases');
    }

    public function services(Request $request)
    {
        return view('informatics.services');
    }

    public function partners(Request $request)
    {
        return view('informatics.partners');
    }

    public function formations(Request $request)
    {
        return view('informatics.formations');
    }
}
