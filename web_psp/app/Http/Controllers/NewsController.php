<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\MemberData;
use App\Models\News;
use App\Models\Program;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(25);
        return view('news-page', compact('news'));
    }


    public function indexWelcome()
    {
        $profilebidang = Information::findOrFail(1);
        $prog = Program::all();
        $kepalaBidangStaffs = MemberData::findOrFail(1);
        $staff = MemberData::where('position_member', 'Kepala Seksi')->get();
        $news = News::orderBy('created_at', 'desc')->take(10)->get();
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
