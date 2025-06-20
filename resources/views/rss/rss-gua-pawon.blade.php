@extends ('layouts.app')
@section('title', 'Gua Pawon - ' . ucwords(__('news/rss-gua-pawon.berita')))
@section('Berita')

    <div class="container  mx-auto px-4 py-15">
        <h1 class="text-3xl font-bold text-center mb-8 mt-10">{{__('news/rss-gua-pawon.berita-gua-pawon')}}</h1>

        @if (count($articles) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($articles as $article)
                    <div class="bg-white rounded shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
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
            <p class="text-center text-gray-500">{{__('news/rss-gua-pawon.tidak-ada-berita')}}</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
@endsection
