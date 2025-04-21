<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('img/Asset 11.png') }}">
    <title>RSS Gua Pawon</title>
</head>

<body>
    {{-- @include('components.navbar') --}}

    <div class="container  mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Berita Terkait Gua Pawon</h1>

        @if (count($articles) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($articles as $article)
                    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        @if ($article['image'])
                            <img src="{{ $article['image'] }}" alt="Thumbnail" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-4">
                            <h3 class="text-lg font-semibold mb-2 text-gray-800">
                                <a href="{{ $article['link'] }}" target="_blank" class="hover:text-blue-600 transition-colors duration-200">
                                    {{ strip_tags($article['snippet']) }}
                                </a>
                            </h3>
                            <p class="text-gray-600 text-sm">
                                {{ strip_tags($article['snippet']) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">Tidak ada berita ditemukan.</p>
        @endif
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
