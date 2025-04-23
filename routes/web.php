<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSSController;


<<<<<<< HEAD

Route::redirect('/', '/gua-pawon');
Route::get('/gua-pawon', [HomeController::class, 'index']);

=======
>>>>>>> develop-news

Route::get('/history', function () {
    return view('history');
});
<<<<<<< HEAD
Route::get('/berita', [newsController::class, 'index']);
=======
Route::get('/berita', [RSSController::class, 'index']);
>>>>>>> develop-news
