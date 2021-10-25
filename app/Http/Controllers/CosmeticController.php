<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleRay;
use App\Models\ArticleCategory;
use App\Models\ArticleType;

class CosmeticController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
        $articleRays = ArticleRay::with('articleCategories')->get();

        $articleTypes = ArticleType::inRandomOrder()->get();

        $articles = Article::where('published', true)
        ->where('quantity', '>', 0)
        ->inRandomOrder()
        ->get();

        return view('cosmetics.index', compact('articleRays', 'articleTypes', 'articles'));
    }

    public function show(Request $request, Article $article)
    {
        return view('cosmetics.show', compact('article'));
    }

    public function guide(Request $request)
    {
        return view('cosmetics.guide');
    }

    public function search(Request $request)
    {
        $articles = Article::where('published', true)
        ->where('quantity', '>', 0)
        ->when($request->has('article_category_id'), function($query) use ($request) {
            if (intval($request->query('article_category_id')) > 0) {
                $query->where('article_category_id', $request->query('article_category_id'));
            }

            if ($request->has('name')) {
                $query->where('name', 'LIKE', '%' . $request->query('name') . '%');
            }
        })
        ->get();

        return view('cosmetics.search', compact('articles'));
    }

    public function soap(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 1)->get();

        $articles = $this->_getFilterArticles(1);

        return view('cosmetics.soap', compact('articleCategories', 'articles'));
    }

    public function milk(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 2)->get();

        $articles = $this->_getFilterArticles(2);

        return view('cosmetics.milk', compact('articleCategories', 'articles'));
    }

    public function scrub(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 3)->get();

        $articles = $this->_getFilterArticles(3);

        return view('cosmetics.scrub', compact('articleCategories', 'articles'));
    }

    public function mask(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 4)->get();

        $articles = $this->_getFilterArticles(4);

        return view('cosmetics.mask', compact('articleCategories', 'articles'));
    }

    public function perfume(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 5)->get();

        $articles = $this->_getFilterArticles(5);

        return view('cosmetics.perfume', compact('articleCategories', 'articles'));
    }

    /**
     * 
     */
    private function _getFilterArticles(int $rayId)
    {
        return Article::where('published', true)
        ->whereHas('articleCategory', function($query) use ($rayId) {
            
            $query->whereHas('articleRay', function($query) use ($rayId) {
                $query->where('id', $rayId);
            });

        })
        ->when(request('article_category_id'), fn($query) => $query->where('article_category_id', request('article_category_id')))
        ->paginate(self::PAGINATION_NUMBER);
    }
}
