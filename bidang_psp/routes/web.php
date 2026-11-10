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
use App\Models\Gallery;

Route::get('/', [NewsController::class, 'indexWelcome'])->name('welcome');


Route::prefix('profile')->group(function () {
    Route::get('/program', [ProgramController::class, 'index'])->name('program.index');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/{id}', [GalleryController::class, 'download'])->name('gallery.download');
    Route::get('/profile-psp', [ProfileBidangController::class, 'index'])->name('profile-bidang.index');
});


// In web.php
Route::get('/404', function () {
    return view('404');
})->name('404');

// Add the fallback route at the end of the file
Route::fallback(function () {
    return view('404');
});

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');



Route::prefix('info')->group(function () {
    Route::get('/informasi', [AnouncementController::class, 'index'])->name('anouncement.index');
    Route::get('/informasi/{id}', [AnouncementController::class, 'show'])->name('anouncement.read');

    Route::get('/download', [DownloadController::class, 'index'])->name('download.index');
    Route::get('/download/{id}', [DownloadController::class, 'download'])->name('download.download');
    Route::get('/download/view/{id}', [DownloadController::class, 'view'])->name('download.view');

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{id}', [NewsController::class, 'show'])->name('news-page.read');
    Route::post('/news/{id}/comment', [NewsController::class, 'storeComment'])->name('news.comment.store');
});



// Route::get('/news', function () {
//     return view('news-page');
// })->name('newspage');


Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');


Route::get('/dashboard', [NewsController::class, 'indexWelcome'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
