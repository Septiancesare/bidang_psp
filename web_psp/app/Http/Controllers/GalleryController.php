<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->query('sort', 'desc'); // Default sort is descending (newest first)
        $perPage = 12; // Number of images per page

        $pict = Gallery::query()
            ->orderBy('created_at', $sort)
            ->paginate($perPage)
            ->withQueryString(); // This preserves other query parameters during pagination

        return view('gallery', [
            'pict' => $pict,
            'currentSort' => $sort
        ]);
    }
}
