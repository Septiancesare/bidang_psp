<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Information;
use App\Models\MemberData;
use App\Models\News;
use App\Models\Program;
use App\Models\PublicNewsComment;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $news = News::when($query, function ($q) use ($query) {
            return $q->where('title_news', 'like', '%' . $query . '%');
        })->orderBy('created_at', 'desc')->paginate(12);

        return view('news-page', compact('news'));
    }


    public function indexWelcome()
    {
        $profilebidang = Information::where('name', 'Profile')->first() ?? null;
        $prog = Program::all() ?? collect([]);
        $kepalaBidangStaffs = MemberData::where('position_member', 'Kepala Bidang')->first() ?? null;
        $staff = MemberData::where('position_member', 'Kepala Seksi')->get() ?? collect([]);
        $news = News::orderBy('created_at', 'desc')->take(10)->get() ?? collect([]);
        $faqs = Faq::latest()->take(5)->get() ?? collect([]);
        return view('welcome', compact('news', 'staff', 'kepalaBidangStaffs', 'profilebidang', 'prog', 'faqs'));
    }

    public function show($id)
    {
        // Fetch the specific news by its ID
        $newsItem = News::findOrFail($id);
        $recentNews = News::where('news_id', '!=', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $comments = PublicNewsComment::where('news_id', $id)->orderBy('created_at', 'desc')->get();

        // Return the view with the news item data
        return view('read-news-page', compact('newsItem', 'recentNews', 'comments'));
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'commenter_name' => 'required|string|max:100',
            'comment' => 'required|string|max:1000',
        ], [
            'commenter_name.required' => 'Nama wajib diisi.',
            'commenter_name.max' => 'Nama maksimal 100 karakter.',
            'comment.required' => 'Komentar wajib diisi.',
            'comment.max' => 'Komentar maksimal 1000 karakter.',
        ]);

        // Make sure news exists
        $newsItem = News::findOrFail($id);

        PublicNewsComment::create([
            'news_id' => $newsItem->news_id,
            'commenter_name' => strip_tags($request->commenter_name),
            'comment' => strip_tags($request->comment),
        ]);

        return redirect()->route('news-page.read', ['id' => $id])->with('comment_success', 'Komentar berhasil dikirim!');
    }
}
