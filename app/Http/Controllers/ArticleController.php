<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = $articles = Article::with('category')->where('is_draft', false)->latest()->get();
        $categories = Category::pluck('category_name')->toArray();

        $popular_articles = Article::where('is_draft', false)
            ->orderByDesc('view_count')
            ->take(3)
            ->get();
            
        return view('articles.index', compact('articles', 'popular_articles', 'categories'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->where('is_draft', false)->firstOrFail();
        $article->increment('view_count');
        $categories = Category::all();

        $related_articles = Article::where('id_categories', $article->id_categories)
            ->where('id_article', '!=', $article->id_article)
            ->where('is_draft', false)
            ->inRandomOrder()
            ->take(3)
            ->get();


        return view('articles.show', compact('article', 'related_articles'));
    }

    public function like($id_article)
    {
        $article = Article::where('id_article', $id_article)->firstOrFail();

        $liked = false;
        if ($article->likes) {
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
