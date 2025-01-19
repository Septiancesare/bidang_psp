<?php

use App\Models\News;
use App\Models\Anouncement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnouncementController;
use App\Http\Controllers\ImageUploadController;

Route::get('/', [NewsController::class, 'indexWelcome'])->name('welcome');
Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/download', function () {
    return view('download-page');
})->name('download');

Route::get('/informasi', [AnouncementController::class, 'index'])->name('anouncement.index');
Route::get('/informasi/{id}', [AnouncementController::class, 'show'])->name('anouncement.read');

Route::get('/profile-psp', function () {
    return view('profile-bidang');
})->name('profile');

Route::get('/hubungi-psp', function () {
    return view('hubungi-kami');
})->name('hubungi');

// Route::get('/news', function () {
//     return view('news-page');
// })->name('newspage');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news-page.read');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/read', function () {
    return view('read-news-page');
})->name('newspage.read');

Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
