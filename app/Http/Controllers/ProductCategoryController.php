<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$productCategories = ProductCategory::paginate(8);

        if ($request->has('product_ray_id')) {
            $productCategories = ProductCategory::where('product_ray_id', $request->query('product_ray_id'))->paginate(8);
        }

    	return view('product_categories.index', compact('productCategories'));
    }

    public function show(Request $request, ProductCategory $productCategory)
    {
    	return view('product_categories.show', compact('productCategory'));
    }
}
