<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductRay;

class ProductRayController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$productRays = ProductRay::paginate(4);

    	return view('product_rays.index', compact('productRays'));
    }

    public function show(Request $request, ProductRay $productRay)
    {
        $productRays = ProductRay::all();

    	return view('product_rays.show', compact('productRay', 'productRays'));
    }
}
