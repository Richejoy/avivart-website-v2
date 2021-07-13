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
    	$productRays = ProductRay::all();

        //$conversions = Conversion::inRandomOrder()->get();

        $productTypes = ProductType::inRandomOrder()->get();

        $products = Product::where('published', true)
        ->where('quantity', '>', 0)->inRandomOrder()->get();

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
        $products = Product::where('published', true)
        ->where('quantity', '>', 0)->get();

        if ($request->has('name')) {
            $conditions = [];

            if ($request->has('product_category_id') && ($request->query('product_category_id') > 0)) {
                $conditions = ['product_category_id' => $request->query('product_category_id')];
            }

            $products = Product::where('published', true)
            ->where('quantity', '>', 0)
            ->where($conditions)
            ->where('name', 'LIKE', '%' . $request->query('name') . '%')
            ->get();
        }

    	return view('stores.search', compact('products'));
    }

    public function organicFoods(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 1)->get();

        $products = Product::whereHas('productCategory', function($query) {
            
            $query->whereHas('productRay', function($query) {
                $query->where('id', 1);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('product_category_id')) {
            $products = Product::where('product_category_id', $request->query('product_category_id'))
                ->whereHas('productCategory', function($query) {
            
                    $query->whereHas('productRay', function($query) {
                        $query->where('id', 1);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }

    	return view('stores.organic_foods', compact('productCategories', 'products'));
    }

    public function manufacturedFoods(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 2)->get();

        $products = Product::whereHas('productCategory', function($query) {
            
            $query->whereHas('productRay', function($query) {
                $query->where('id', 2);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('product_category_id')) {
            $products = Product::where('product_category_id', $request->query('product_category_id'))
                ->whereHas('productCategory', function($query) {
            
                    $query->whereHas('productRay', function($query) {
                        $query->where('id', 2);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }

    	return view('stores.manufactured_foods', compact('productCategories', 'products'));
    }

    public function homeAppliance(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 3)->get();

        $products = Product::whereHas('productCategory', function($query) {
            
            $query->whereHas('productRay', function($query) {
                $query->where('id', 3);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('product_category_id')) {
            $products = Product::where('product_category_id', $request->query('product_category_id'))
                ->whereHas('productCategory', function($query) {
            
                    $query->whereHas('productRay', function($query) {
                        $query->where('id', 3);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }
        
        return view('stores.home_appliance', compact('productCategories', 'products'));
    }

    public function highTech(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 4)->get();

        $products = Product::whereHas('productCategory', function($query) {
            
            $query->whereHas('productRay', function($query) {
                $query->where('id', 4);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('product_category_id')) {
            $products = Product::where('product_category_id', $request->query('product_category_id'))
                ->whereHas('productCategory', function($query) {
            
                    $query->whereHas('productRay', function($query) {
                        $query->where('id', 4);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }
        
        return view('stores.high_tech', compact('productCategories', 'products'));
    }

    public function otherProducts(Request $request)
    {
        $productCategories = ProductCategory::where('product_ray_id', 5)->get();

        $products = Product::whereHas('productCategory', function($query) {
            
            $query->whereHas('productRay', function($query) {
                $query->where('id', 5);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('product_category_id')) {
            $products = Product::where('product_category_id', $request->query('product_category_id'))
                ->whereHas('productCategory', function($query) {
            
                    $query->whereHas('productRay', function($query) {
                        $query->where('id', 5);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }
        
        return view('stores.other_products', compact('productCategories', 'products'));
    }
}
