@extends('layouts.app')

@section('title', 'Halaman Kadaluarsa')

@section('error')
    <div class="text-center py-20">
        <h1 class="text-5xl font-bold text-gray-800 mt-25">419</h1>
        <p class="text-gray-600 mt-4 text-lg">Halaman ini telah kadaluarsa. Silakan coba lagi.</p>
        <a href="{{ url('/gua-pawon') }}" class="mt-6 inline-block bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
            Kembali ke Beranda
        </a>
    </div>
@endsection
