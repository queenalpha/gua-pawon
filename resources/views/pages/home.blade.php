@extends('layouts.app')
@section('title', 'Gua Pawon')

@section('home')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner1.jpg') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl">Gua Pawon: {{__('pages/home.warisan-sejarah')}}</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">
                {{__('pages/home.desc-judul-1')}}
                <br/>
                {{__('pages/home.desc-judul-2')}}
            </p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-10 text-justify text-base space-y-5">
        <p>{{__('pages/home.paragraf-1')}}</p>
        <p>{{__('pages/home.paragraf-2')}}</p>
        <p>{{__('pages/home.paragraf-3')}}</p>
    </div>

    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-4 pb-10">
        <div class="md:col-span-2 overflow-hidden rounded shadow-lg group h-64 md:h-96 lg:h-120">
            <img src="{{ Vite::asset('resources/img/image 14.png') }}" alt="Gua Pawon"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-300" />
        </div>
        <div class="overflow-hidden rounded shadow-lg group h-64 md:h-96 lg:h-120">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Gua Pawon"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-300" />
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 text-justify text-base space-y-4">
        <p>{{__('pages/home.daya-tarik-pawon')}}</p>
        <ul class="list-disc list-inside space-y-2">
            <li>
                {{__('pages/home.list-1')}}
            </li>
            <li>
                {{__('pages/home.list-2')}}
            </li>
            <li>
                {{__('pages/home.list-3')}}
            </li>
            <li>
                {{__('pages/home.list-4')}}
            </li>
        </ul>
    </div>

    <div class="lg:py-8 max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 my-10">
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Sejarah" class="w-full h-48 object-cover" />
            <a href="/history#Sejarah" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>{{__('components/navbar.sejarah')}}</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Ekologi" class="w-full h-48 object-cover" />
            <a href="/ecology" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>{{__('components/navbar.ekologi-geologi')}}</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Konservasi"
                class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>{{__('components/navbar.upaya-konservasi')}}</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Penelitian"
                class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>{{__('components/navbar.penelitian')}}</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Artikel" class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>{{__('components/navbar.artikel')}}</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Kontak" class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>{{__('pages/home.kontak-lokasi')}}</span> <span>→</span>
            </a>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 my-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center my-10">
            <div class="space-y-4 px-4">
                <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                    <h2 class="text-dark mb-2 text-2xl font-semibold ">
                        Gua Pawon Tour
                    </h2>
                </div>
                <p class="text-gray-700 text-justify text-base">
                    {{__('pages/home.tour-desc')}}
                </p>
                <p class="text-gray-700 text-justify">
                    {{__('pages/home.temukan-keindahan')}}
                </p>
            </div>

            <div class="relative aspect-video w-full max-w-2xl">
                <iframe class="w-full h-full rounded"
                    src="https://www.youtube.com/embed/DT0hJuvqKJA?si=_xw1hxCJAinvXFjj" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>


    <div class="max-w-6xl mx-auto px-4 my-10 py-5" id="berita">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5 mb-6">
            <h2 class="text-dark text-2xl font-semibold">
                {{__('news/rss-gua-pawon.berita-seputar-pawon')}}
            </h2>
        </div>
        @if (count($articles) > 0)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Artikel utama --}}
            <div class="relative overflow-hidden shadow-lg h-96 lg:h-auto">
                @php $mainArticle = $articles[0]; @endphp
                @if ($mainArticle['image'])
                <img src="{{ $mainArticle['image'] }}" alt="Main Article"
                    class="w-full h-full object-cover absolute inset-0">
                @endif
                <a href="{{ $mainArticle['link'] }}" target="_blank"
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 text-white block hover:opacity-90 transition-opacity">
                    <h2 class="text-xl font-semibold mb-1 leading-tight">
                        {{ strip_tags($mainArticle['title']) }}
                    </h2>
                    <p class="text-sm opacity-80 mb-1">
                        {{ date('d M Y', strtotime($mainArticle['pubDate'] ?? now())) }}
                    </p>
                    <p class="text-sm">
                        {{ strip_tags($mainArticle['snippet']) }}
                    </p>
                </a>
            </div>

            {{-- Artikel lainnya --}}
            <div class="lg:col-span-2 grid grid-cols-1 gap-4">
                @foreach ($articles as $index => $article)
                @if ($index > 0 && $index <= 3)
                    <div class="flex flex-col sm:flex-row gap-4">
                    @if ($article['image'])
                    <img src="{{ $article['image'] }}" alt="Thumbnail"
                        class="w-full sm:w-32 h-40 sm:h-32 object-cover rounded">
                    @endif
                    <div class="flex-1">
                        <a href="{{ $article['link'] }}" target="_blank" class="hover:underline block">
                            <h3 class="text-md font-semibold text-gray-900 mb-1 leading-snug">
                                {{ strip_tags($article['title']) }}
                            </h3>
                            <p class="text-xs text-gray-500 mb-1">
                                {{ date('d M Y', strtotime($article['pubDate'] ?? now())) }}
                            </p>
                            <p class="text-sm text-gray-700">
                                {{ strip_tags($article['snippet']) }}
                            </p>
                        </a>
                    </div>
            </div>
            @endif
            @endforeach
            <div class="text-center">
                <a href="/news">{{__('news/rss-gua-pawon.lihat-kumpulan-berita')}}</a>
            </div>
        </div>
    </div>
    @else
    <p class="text-center text-gray-500">{{__('news/rss-gua-pawon.berita-tidak-ditemukan')}}</p>
    @endif
    </div>

    <div class="max-w-6xl mx-auto px-4 my-10 py-5">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5 mb-6">
            <h2 class="text-dark text-2xl font-semibold">
                3D Preview
            </h2>
        </div>
        <p class="text-gray-700 text-justify mb-4">
            {{__('pages/home.3d-desc')}}
        </p>
        <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg" data-carousel="static">
            <div class="relative h-[500px]" data-carousel-inner>
                <div class="hidden duration-900" data-carousel-item>
                    <iframe title="The Cave Windows of Pawon Cave" frameborder="0" allowfullscreen
                        mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/5c47ee6cb7184f6ca82cbc8945432c65/embed"
                        class="w-full h-full"></iframe>
                </div>
                <div class="hidden duration-900" data-carousel-item>
                    <iframe title="The Chambers of Pawon Cave" frameborder="0" allowfullscreen mozallowfullscreen="true"
                        webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking"
                        xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/84d53f0bd8a24344b0ef4f4fda9b00a7/embed"
                        class="w-full h-full"></iframe>
                </div>
            </div>
            <button type="button"
                class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-prev>
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
            </button>
            <button type="button"
                class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-next>
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>


    @include('components.faq')
    @livewire('kotak_saran')
@endsection
