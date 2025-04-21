<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSSController;



Route::get('/', function () {
    return view('home');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/berita', [RSSController::class, 'index']);
