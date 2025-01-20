<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $file = Download::orderBy('created_at')->paginate(25);
        return view('download-page', compact('file'));
    }

    public function download($id)
    {
        // Temukan file berdasarkan ID
        $file = Download::findOrFail($id);

        // Path lengkap ke file
        $filePath = public_path($file->file);

        // Cek apakah file ada di path tersebut
        if (!file_exists($filePath)) {
            return back()->with('error', 'File not found.');
        }

        // Kirim respons untuk mengunduh file
        return response()->download($filePath, basename($file->file));
    }
}
