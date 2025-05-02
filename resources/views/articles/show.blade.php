@extends('layouts.app')
@section('title', $article->title)

@section('artikel-konten')
        <img src="{{ asset('storage/' . ($article->cover ? $article->cover : 'covers/default/default.jpg')) }}"
            alt="{{ $article->title }}" class="w-full h-90 object-cover shadow mb-6">
        <h1 class="text-4xl font-bold mb-4 text-center">{{ $article->title }}</h1>
        <div class="flex items-center flex-wrap justify-center space-x-4 text-sm text-gray-500 mb-8">
            <div><span class="font-semibold">{{ number_format_short($article->view_count) }}</span> views</div>
            <div><span class="font-semibold" id="likes-count">{{ number_format_short($article->likes) }}</span> likes</div>
            <!-- Like button -->
            <button id="like-button" class="text-red-500 hover:text-red-600 cursor-pointer mt-2 sm:mt-0"
                data-id="{{ $article->id_article }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="size-6 stroke-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </button>

        </div>

        <div class="max-w-6xl mx-auto flex flex-col md:flex-row">
            <div class="w-full md:w-24 flex md:flex-col items-center justify-start">
                <a href="{{ route('articles.index') }}"
                    class="flex items-center justify-center w-10 h-10 rounded-full bg-black text-white hover:bg-gray-800 transition mb-2 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                </a>

                <div class="flex md:flex-col items-center md:mt-5 text-sm text-gray-500">
                    <span class="md:mb-1">{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('F') }}</span>
                    <span
                        class="text-4xl font-bold md:mb-1 md:mt-1">{{ \Carbon\Carbon::parse($article->created_at)->format('d') }}</span>
                    <span>{{ \Carbon\Carbon::parse($article->created_at)->format('Y') }}</span>
                </div>
            </div>

            <div class="flex-1 space-y-6 order-1">
                <div class="prose prose-lg max-w-none text-justify px-4 md:px-0">
                    {!! $article->content !!}
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 mb-10 mt-12">
            <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                    Terkait {{ $article->category->category_name }}
                </h2>
            </div>
            @if ($related_articles->count() > 0)
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($related_articles as $article)
                        <div class="flex flex-col shadow">
                            <div class="h-56 w-full">
                                <img src="{{ asset('storage/' . ($article->cover ? $article->cover : 'covers/default/default.jpg')) }}"
                                    alt="{{ $article->title }}" class="w-full h-full object-cover" />
                            </div>
                            <div class="p-4 flex flex-col">
                                <h6 class="text-slate-800 text-lg font-semibold leading-snug">
                                    {{ $article->title }}
                                </h6>
                                <p class="text-sm text-gray-500 mt-2">
                                    {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}
                                </p>
                                <p class="text-slate-600 text-sm leading-normal line-clamp-4 mt-2">
                                    {{ strip_tags($article->content) }}
                                </p>
                                <a href="{{ route('articles.show', $article->slug) }}"
                                    class="text-red-500 text-sm font-semibold hover:underline flex items-center gap-1 mt-2">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500">Belum ada artikel terkait {{ $article->category->category_name }}.</p>
            @endif

        </div>

    <script>
        document.getElementById('like-button').addEventListener('click', function () {
            var articleId = this.getAttribute('data-id');
            var button = this;
            var icon = button.querySelector('svg');
            var likesCountElement = document.getElementById('likes-count');

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
                        if (data.isLiked) {
                            // Full merah setelah klik
                            icon.classList.add('fill-red-500');
                            icon.classList.remove('fill-none');
                        } else {
                            // Balikin ke stroke-only merah
                            icon.classList.remove('fill-red-500');
                            icon.classList.add('fill-none');
                        }
                    }
                });
        });

    </script>
@endsection

