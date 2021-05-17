<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$productTypes = ProductType::paginate(4);

    	return view('product_types.index', compact('productTypes'));
    }

    public function show(Request $request, ProductType $productType)
    {
        $productTypes = ProductType::all();

    	return view('product_types.show', compact('productType', 'productTypes'));
    }
}
