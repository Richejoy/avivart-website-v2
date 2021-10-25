<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductRay;
use App\Models\ProductType;
use App\Models\Conversion;
use App\Models\Product;

class StoreController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$productRays = ProductRay::with('image', 'productCategories')
        ->get();

        $productTypes = ProductType::inRandomOrder()
        ->get();

        $products = Product::with('image', 'productType', 'conversion', 'currency')->where('published', true)
        ->where('quantity', '>', 0)
        ->inRandomOrder()
        ->get();

        return view('stores.index', compact('productRays', 'productTypes', 'products'));
    }

    public function show(Request $request, Product $product)
    {
    	return view('stores.show', compact('product'));
    }

    public function guide(Request $request)
    {
        return view('stores.guide');
    }

    public function search(Request $request)
    {
        $products = Product::with('image', 'productType', 'conversion', 'currency')
        ->where('published', true)
        ->where('quantity', '>', 0)
        ->when($request->has('product_category_id'), function($query) use ($request) {
            if (intval($request->query('product_category_id')) > 0) {
                $query->where('product_category_id', $request->query('product_category_id'));
            }

            if ($request->has('name')) {
                $query->where('name', 'LIKE', '%' . $request->query('name') . '%');
            }
        })
        ->get();

    	return view('stores.search', compact('products'));
    }

    public function organicFoods(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 1)->get();

        $products = $this->_getFilterProducts(1);

    	return view('stores.organic_foods', compact('productCategories', 'products'));
    }

    public function manufacturedFoods(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 2)->get();

        $products = $this->_getFilterProducts(2);

    	return view('stores.manufactured_foods', compact('productCategories', 'products'));
    }

    public function homeAppliance(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 3)->get();

        $products = $this->_getFilterProducts(3);
        
        return view('stores.home_appliance', compact('productCategories', 'products'));
    }

    public function highTech(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 4)->get();

        $products = $this->_getFilterProducts(4);
        
        return view('stores.high_tech', compact('productCategories', 'products'));
    }

    public function otherProducts(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 5)->get();

        $products = $this->_getFilterProducts(5);
        
        return view('stores.other_products', compact('productCategories', 'products'));
    }

    /**
     * 
     */
    private function _getFilterProducts(int $rayId)
    {
        return Product::with('image', 'productType', 'conversion', 'currency')
        ->where('published', true)
        ->whereHas('productCategory', function($query) use ($rayId) {
            
            $query->whereHas('productRay', function($query) use ($rayId) {
                $query->where('id', $rayId);
            });

        })
        ->when(request('product_category_id'), fn($query) => $query->where('product_category_id', request('product_category_id')))
        ->paginate(self::PAGINATION_NUMBER);
    }
}
