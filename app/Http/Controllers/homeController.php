<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Kalau belum ada cache, atau expired
        if (!Cache::has('cse_data')) {
            // Jalankan command RefreshRSSResults secara programatik
            Artisan::call('app:refresh-r-s-s-results');
        }

        $cached = Cache::get('cse_data');
        $articles = $cached['articles'] ?? [];

        return view('pages.home', compact('articles'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
