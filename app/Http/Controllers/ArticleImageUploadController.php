<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleImageUploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        // Validasi file gambar
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Ambil file yang diupload
        $image = $request->file('image');

        // Buat nama file unik untuk menghindari duplikat
        $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();

        // Simpan file ke dalam folder 'article-image' di public disk
        $path = $image->storeAs('article-image', $imageName, 'public');

        // Kembalikan URL file yang bisa diakses
        return response()->json([
            'url' => Storage::url($path),
        ]);
    }
}
