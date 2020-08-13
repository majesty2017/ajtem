<?php


namespace App\Http\Controllers;


use App\Models\Articles;
use App\Models\Category;
use App\Models\Slider;

class WelcomeController
{
    public function welcome() {
        $articles = Articles::all();
        $categories = Category::all();
        $published_articles = Articles::all()->where('is_published', 1)->take(4);
        $specials = Articles::all()->where('is_published', 1)->take(1)->sortByDesc('created_at');
        $sliders = Slider::all()->take(4);
        return view('welcome', compact(
            'articles',
            'categories',
            'published_articles',
            'specials',
            'sliders'
        ));
    }
}
