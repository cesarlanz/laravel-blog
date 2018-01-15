<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;
use App\Tag;

class AsideComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();
        $view->with('categories', $categories)->with('tags', $tags);
    }
}