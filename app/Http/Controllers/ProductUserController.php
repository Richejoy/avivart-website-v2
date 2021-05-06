<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductUser;

class ProductUserController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('products_users.index');
    }

    public function show(Request $request, ProductUser $productUser)
    {
        $user = $request->user();

        return view('products_users.show', compact('productUser'));
    }
}
