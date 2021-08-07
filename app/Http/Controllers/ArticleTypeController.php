<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleType;

class ArticleTypeController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$articleTypes = ArticleType::paginate(4);

    	return view('article_types.index', compact('articleTypes'));
    }

    public function show(Request $request, ArticleType $articleType)
    {
        $articleTypes = ArticleType::all();

    	return view('article_types.show', compact('articleType', 'articleTypes'));
    }
}
