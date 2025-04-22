<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSSController;



Route::redirect('/', '/gua-pawon');
Route::get('/gua-pawon', [HomeController::class, 'index']);


Route::get('/history', function () {
    return view('history');
});
Route::get('/berita', [newsController::class, 'index']);
