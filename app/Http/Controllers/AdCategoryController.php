<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdCategory;

class AdCategoryController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$adCategories = AdCategory::paginate(8);

        if ($request->has('ad_ray_id')) {
            $adCategories = AdCategory::where('ad_ray_id', $request->query('ad_ray_id'))->paginate(8);
        }

    	return view('ad_categories.index', compact('adCategories'));
    }

    public function show(Request $request, AdCategory $adCategory)
    {
        $adCategories = AdCategory::all();

    	return view('ad_categories.show', compact('adCategory', 'adCategories'));
    }
}
