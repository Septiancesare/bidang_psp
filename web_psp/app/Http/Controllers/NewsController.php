<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(25);
        return view('news-page', compact('news'));
    }

    public function show($id)
    {
        // Fetch the specific news by its ID
        $newsItem = News::findOrFail($id);

        // Return the view with the news item data
        return view('read-news-page', compact('newsItem'));
    }
}
