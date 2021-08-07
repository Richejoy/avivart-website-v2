<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$articleCategories = ArticleCategory::paginate(8);

        if ($request->has('article_ray_id')) {
            $articleCategories = ArticleCategory::where('article_ray_id', $request->query('article_ray_id'))->paginate(8);
        }

    	return view('article_categories.index', compact('articleCategories'));
    }

    public function show(Request $request, ArticleCategory $articleCategory)
    {
        $articleCategories = ArticleCategory::all();

    	return view('article_categories.show', compact('articleCategory', 'articleCategories'));
    }
}
