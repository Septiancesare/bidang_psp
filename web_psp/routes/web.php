<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageUploadController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/informasi', function () {
    return view('anouncement');
})->name('anouncement');

Route::get('/profile-psp', function () {
    return view('profile-bidang');
})->name('profile');

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
