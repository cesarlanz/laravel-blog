<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(4);
        $categories = Category::all();
        $tags = Tag::all();

        //dd($articles);

        return view('front.index')
            ->with('articles', $articles)
            ->with('categories', $categories)
            ->with('tags', $tags);
    }

}
