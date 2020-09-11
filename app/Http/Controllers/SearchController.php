<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getResults(Request $request) {
        $query = $request->input('query');
        if (!$query || empty($query) || $query == null) {
            return redirect()->back()->with('info', 'No article searched.');
        }

        $articles = Articles::where('tags', 'LIKE', "%{$query}%")
            ->orWhere('title', 'LIKE', "%{$query}%")
            ->orWhere('tags', 'LIKE', "%{$query}%")
            ->orWhere('abstract', 'LIKE', "%{$query}%")
            ->orWhere('author', 'LIKE', "%{$query}%")
            ->orWhere('pages', 'LIKE', "%{$query}%")
            ->get();

        $categories = Category::all();
        return view('layouts.search.results', compact('articles', 'categories', 'query'));
    }
}
