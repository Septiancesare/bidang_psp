<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\MemberData;
use App\Models\News;
use App\Models\Program;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $news = News::when($query, function ($q) use ($query) {
            return $q->where('title_news', 'like', '%' . $query . '%');
        })->orderBy('created_at', 'desc')->paginate(25);

        return view('news-page', compact('news'));
    }


    public function indexWelcome()
    {
        $profilebidang = Information::where('name', 'Profile')->first() ?? null;
        $prog = Program::all() ?? collect([]);
        $kepalaBidangStaffs = MemberData::where('position_member', 'Kepala Bidang')->first() ?? null;
        $staff = MemberData::where('position_member', 'Kepala Seksi')->get() ?? collect([]);
        $news = News::orderBy('created_at', 'desc')->take(10)->get() ?? collect([]);
        return view('welcome', compact('news', 'staff', 'kepalaBidangStaffs', 'profilebidang', 'prog'));
    }

    public function show($id)
    {
        // Fetch the specific news by its ID
        $newsItem = News::findOrFail($id);
        $recentNews = News::orderBy('created_at', 'desc')->take(5)->get();

        // Return the view with the news item data
        return view('read-news-page', compact('newsItem', 'recentNews'));
    }
}
