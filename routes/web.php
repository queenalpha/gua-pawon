<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSSController;



Route::redirect('/', '/gua-pawon');
Route::get('/gua-pawon', [HomeController::class, 'index']);


Route::get('/history', function () {
    return view('history');
});
// Route::get('/berita', [RSSController::class, 'index']);
