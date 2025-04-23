<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

class RSSController extends Controller
{
    public function index()
    {

        // Kalau belum ada cache, atau expired
        if (!Cache::has('cse_data')) {
            // Jalankan command RefreshRSSResults secara programatik
            Artisan::call('app:refresh-r-s-s-results');
        }
        $cached = Cache::get('cse_data');
        $articles = $cached['articles'] ?? [];

        return view('rss.rss-gua-pawon', compact('articles'));
    }
}