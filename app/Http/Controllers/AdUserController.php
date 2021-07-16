<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdUser;

class AdUserController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('ads_users.index');
    }

    public function show(Request $request, AdUser $adUser)
    {
        $user = $request->user();

        return view('ads_users.show', compact('adUser'));
    }
}
