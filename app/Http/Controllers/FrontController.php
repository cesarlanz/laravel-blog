<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
//use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class FrontController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }


    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        return view('front.index')
            ->with('articles', $articles);
    }


    public function searchCategory($name)
    {
        $category = Category::searchCategory($name)->first();
        $articles = $category->articles()->paginate(4);
        return view('front.index')
            ->with('articles', $articles);
    }


    public function searchTag($name)
    {
        $tag = Tag::searchTag($name)->first();
        $articles = $tag->articles()->paginate(4);
        return view('front.index')
            ->with('articles', $articles);
    }
}
