<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_draft', false)->latest()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->increment('view_count');

        // Ambil 3 artikel lain, random, beda dengan yang dibuka sekarang
        $related_articles = \App\Models\Article::where('id_article', '!=', $article->id)
            ->where('is_draft', false)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('articles.show', compact('article', 'related_articles'));
    }

    public function like($id_article)
    {
        $article = \App\Models\Article::where('id_article', $id_article)->firstOrFail();

        // Cek apakah sudah like
        $liked = false;
        if ($article->likes) {
            // Jika sudah like, set liked ke true
            $liked = true;
        }

        // Toggle like/unlike
        if ($liked) {
            $article->decrement('likes');
        } else {
            $article->increment('likes');
        }

        // Kembalikan status like dan jumlah like terbaru
        return response()->json([
            'success' => true,
            'likes' => $article->likes,
            'isLiked' => !$liked, // Kalau belum like, set jadi true
        ]);
    }
}
