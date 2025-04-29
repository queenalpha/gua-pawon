<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('img/Asset 11.png') }}">
    <title>{{ $article->title }} - Article Gua Pawon</title>
</head>

<body class="bg-gray-50 text-gray-800">

    {{-- @include('components.navbar') --}}

    <div class="max-w-4xl mx-auto px-4 py-8">
        <a href="{{ route('articles.index') }}" class="inline-flex items-center mb-6 text-blue-600 hover:underline">
            ← Kembali ke Daftar Artikel
        </a>
        <img src="{{ asset('storage/' . ($article->cover ? $article->cover : 'covers/default/default.jpg')) }}" alt="{{ $article->title }}" class="w-full h-64 object-cover rounded-lg shadow mb-6">
        <h1 class="text-4xl font-bold mb-4">{{ $article->title }}</h1>
        <div class="flex items-center space-x-4 text-sm text-gray-500 mb-8">
            <div><span class="font-semibold">{{ $article->view_count }}</span> views</div>
            <div><span class="font-semibold" id="likes-count">{{ $article->likes }}</span> likes</div>
            <!-- Like button -->
            <button id="like-button" class="text-black hover:text-blue-600 cursor-pointer" data-id="{{ $article->id_article }}">
                Like
            </button>
        </div>
        {{-- script ajax --}}
        <script>
            document.getElementById('like-button').addEventListener('click', function() {
                var articleId = this.getAttribute('data-id');
                var button = this;
                var likesCountElement = document.getElementById('likes-count');
        
                // Kirim AJAX request dengan id_article
                fetch(`/articles/${articleId}/like`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify({ article_id: articleId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        likesCountElement.innerText = data.likes;
                        // Ubah teks dan warna tombol
                        if (data.isLiked) {
                            button.innerText = 'Liked';
                            button.classList.remove('text-black');
                            button.classList.add('text-blue-600');
                        } else {
                            button.innerText = 'Like';
                            button.classList.remove('text-blue-600');
                            button.classList.add('text-black');
                        }
                    }
                });
            });
        </script>    
        <div class="flex items-center space-x-4 mb-8">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="text-blue-600 hover:underline">
                Share Facebook
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="text-blue-400 hover:underline">
                Share Twitter
            </a>
        </div>

        <div class="prose max-w-none prose-img:rounded-lg prose-img:shadow">
            {!! $article->content !!}
        </div>

        <hr class="my-10">

        <div class="mt-10">
            <h2 class="text-2xl font-bold mb-6">Artikel Terkait</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($related_articles as $related)
                    <div class="bg-white rounded shadow hover:shadow-lg p-4 transition">
                        <img src="{{ asset('storage/' . ($related->cover ? $related->cover : 'covers/default/default.jpg')) }}" alt="{{ $related->title }}" class="w-full h-40 object-cover rounded mb-4">
                        <h3 class="text-lg font-semibold">
                            <a href="{{ route('articles.show', $related->slug) }}" class="hover:text-blue-600">{{ $related->title }}</a>
                        </h3>
                    </div>
                @empty
                    <p class="text-gray-500">Belum ada artikel terkait.</p>
                @endforelse
            </div>
        </div>

    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
