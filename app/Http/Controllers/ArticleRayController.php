<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleRay;

class ArticleRayController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$articleRays = ArticleRay::paginate(4);

    	return view('article_rays.index', compact('articleRays'));
    }

    public function show(Request $request, ArticleRay $articleRay)
    {
        $articleRays = ArticleRay::all();

    	return view('article_rays.show', compact('articleRay', 'articleRays'));
    }
}
