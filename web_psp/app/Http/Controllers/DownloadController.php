<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $file = Download::when($query, function ($q) use ($query) {
            return $q->where('title', 'like', '%' . $query . '%');
        })->orderBy('created_at')->paginate(25);

        return view('download-page', compact('file'));
    }

    public function download($id)
    {
        // Temukan file berdasarkan ID
        $file = Download::findOrFail($id);

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
