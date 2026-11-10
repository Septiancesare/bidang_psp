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

    public function view($id)
    {
        $file = Download::findOrFail($id);
        $extension = strtolower(pathinfo($file->file_path, PATHINFO_EXTENSION));

        // Get file path
        $filePath = public_path('storage/' . $file->file);

        // Check if file exists
        if (!file_exists($filePath)) {
            abort(404);
        }

        // For images - display directly
        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
            return response()->file($filePath);
        }

        // For PDFs - display in browser
        if ($extension === 'pdf') {
            return response()->file($filePath, [
                'Content-Type' => 'application/pdf'
            ]);
        }

        // For Office documents - use Google Docs Viewer
        if (in_array($extension, ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx'])) {
            $publicPath = asset('storage/' . $file->file_path);
            return view('file-viewer', [
                'fileUrl' => $publicPath,
                'fileName' => $file->title
            ]);
        }

        // For other file types - prompt download
        return response()->download($filePath);
    }
}
