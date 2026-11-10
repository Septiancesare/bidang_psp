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

    public function download($id)
    {
        // Temukan file berdasarkan ID
        $file = Gallery::findOrFail($id);

        // Path lengkap ke file di public/storage/uploads
        $filePath = public_path('storage/' . $file->file);

        // Cek apakah file ada di path tersebut
        if (!file_exists($filePath)) {
            return back()->with('error', 'File not found.');
        }

        // Kirim respons untuk mengunduh file
        return response()->download($filePath, basename($file->file));
    }
}
