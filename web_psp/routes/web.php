<?php

use App\Models\News;
use App\Models\Program;
use App\Models\Download;
use App\Models\Anouncement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\AnouncementController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ProfileBidangController;

Route::get('/', [NewsController::class, 'indexWelcome'])->name('welcome');
Route::get('/program', function () {
    return view('program');
})->name('program');
Route::get('/program', [ProgramController::class, 'index'])->name('program.index');

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');


Route::get('/informasi', [AnouncementController::class, 'index'])->name('anouncement.index');
Route::get('/informasi/{id}', [AnouncementController::class, 'show'])->name('anouncement.read');

Route::get('/download/', [DownloadController::class, 'index'])->name('download.index');
Route::get('/download/{id}', [DownloadController::class, 'download'])->name('download.download');
Route::get('/download/view/{id}', [DownloadController::class, 'view'])->name('download.view');


Route::get('/profile-psp', [ProfileBidangController::class, 'index'])->name('profile-bidang.index');

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
