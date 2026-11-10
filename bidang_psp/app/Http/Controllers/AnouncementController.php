<?php

namespace App\Http\Controllers;

use App\Models\Anouncement;
use Illuminate\Http\Request;

class AnouncementController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $anounce = Anouncement::when($query, function ($q) use ($query) {
            return $q->where('title', 'like', '%' . $query . '%');
        })->orderBy('created_at')->paginate(25);

        return view('anouncement', compact('anounce'));
    }

    public function show($id)
    {
        // Fetch the specific news by its ID
        $anounceContent = Anouncement::findOrFail($id);

        // Return the view with the news item data
        return view('read-anouncement', compact('anounceContent'));
    }
}
