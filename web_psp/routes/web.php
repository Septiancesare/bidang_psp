<?php

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
