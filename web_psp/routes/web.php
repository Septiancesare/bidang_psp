<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/profile-psp', function () {
    return view('profile-bidang');
})->name('profile');

Route::get('/news', function () {
    return view('news-page');
})->name('newspage');

Route::get('/news/read', function () {
    return view('read-news-page');
})->name('newspage.read');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
