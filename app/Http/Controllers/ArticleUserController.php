<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleUser;

class ArticleUserController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('articles_users.index');
    }

    public function show(Request $request, ArticleUser $articleUser)
    {
        $user = $request->user();

        return view('articles_users.show', compact('articleUser'));
    }
}
