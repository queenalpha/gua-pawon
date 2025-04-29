<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('img/Asset 11.png') }}">
    <title>Post Gua Pawon</title>
</head>

<body>
    {{-- @include('components.navbar') --}}

    <div class="container mx-auto px-4 py-8">
        <a href="/" class="text-black-600 hover:underline">
            Kembali
        </a>
        <h1 class="text-3xl font-bold text-center mb-8">Post Terkait Gua Pawon</h1>

        @if ($articles->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($articles as $article)
                    <div class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <img src="{{ asset('storage/' . ($article->cover ? $article->cover : 'covers/default.jpg')) }}" alt="Thumbnail" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-gray-800">
                                <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-blue-600 transition-colors duration-200">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 text-sm mt-2">
                                {{ Str::limit(strip_tags($article->content), 100) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">Sedang Tidak ada berita.</p>
        @endif
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
