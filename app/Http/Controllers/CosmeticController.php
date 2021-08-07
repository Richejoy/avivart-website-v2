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
        $articleRays = ArticleRay::all();

        $articleTypes = ArticleType::inRandomOrder()->get();

        $articles = Article::where('published', true)
        ->where('quantity', '>', 0)->inRandomOrder()->get();

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
        $query = Article::where('published', true)
        ->where('quantity', '>', 0);

        if ($request->has('article_category_id')) {

            if ($request->query('article_category_id') > 0) {
                $query = $query->where(['article_category_id' => $request->query('article_category_id')]);
            }

            if ($request->has('name')) {
                $query = $query->where('name', 'LIKE', '%' . $request->query('name') . '%');
            }
        }

        $articles = $query->get();

        return view('cosmetics.search', compact('articles'));
    }

    public function soap(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 1)->get();

        $articles = Article::whereHas('articleCategory', function($query) {
            
            $query->whereHas('articleRay', function($query) {
                $query->where('id', 1);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('article_category_id')) {
            $articles = Article::where('article_category_id', $request->query('article_category_id'))
                ->whereHas('articleCategory', function($query) {
            
                    $query->whereHas('articleRay', function($query) {
                        $query->where('id', 1);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }

        return view('cosmetics.soap', compact('articleCategories', 'articles'));
    }

    public function milk(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 2)->get();

        $articles = Article::whereHas('articleCategory', function($query) {
            
            $query->whereHas('articleRay', function($query) {
                $query->where('id', 2);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('article_category_id')) {
            $articles = Article::where('article_category_id', $request->query('article_category_id'))
                ->whereHas('articleCategory', function($query) {
            
                    $query->whereHas('articleRay', function($query) {
                        $query->where('id', 2);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }

        return view('cosmetics.milk', compact('articleCategories', 'articles'));
    }

    public function scrub(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 3)->get();

        $articles = Article::whereHas('articleCategory', function($query) {
            
            $query->whereHas('articleRay', function($query) {
                $query->where('id', 3);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('article_category_id')) {
            $articles = Article::where('article_category_id', $request->query('article_category_id'))
                ->whereHas('articleCategory', function($query) {
            
                    $query->whereHas('articleRay', function($query) {
                        $query->where('id', 3);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }

        return view('cosmetics.scrub', compact('articleCategories', 'articles'));
    }

    public function mask(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 4)->get();

        $articles = Article::whereHas('articleCategory', function($query) {
            
            $query->whereHas('articleRay', function($query) {
                $query->where('id', 4);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('article_category_id')) {
            $articles = Article::where('article_category_id', $request->query('article_category_id'))
                ->whereHas('articleCategory', function($query) {
            
                    $query->whereHas('articleRay', function($query) {
                        $query->where('id', 4);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }

        return view('cosmetics.mask', compact('articleCategories', 'articles'));
    }

    public function perfume(Request $request)
    {
        $articleCategories = ArticleCategory::where('article_ray_id', 5)->get();

        $articles = Article::whereHas('articleCategory', function($query) {
            
            $query->whereHas('articleRay', function($query) {
                $query->where('id', 5);
            });

        })->paginate(self::PAGINATION_NUMBER);

        if ($request->has('article_category_id')) {
            $articles = Article::where('article_category_id', $request->query('article_category_id'))
                ->whereHas('articleCategory', function($query) {
            
                    $query->whereHas('articleRay', function($query) {
                        $query->where('id', 5);
                    });

            })->paginate(self::PAGINATION_NUMBER);
        }

        return view('cosmetics.perfume', compact('articleCategories', 'articles'));
    }
}
