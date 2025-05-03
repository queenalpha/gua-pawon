@extends('layouts.app')
@section('title')
    {{__('articles/index.judul')}}
@endsection

@section('artikel')
    <div class="max-w-6xl mx-auto px-4 pt-12">
        <div class="text-center mt-10">
            <span class="font-extrabold text-3xl tracking-wide">PAWON</span>
            <span class="font-light text-2xl ml-1">{{__('articles/index.artikel')}}</span>
        </div>
    </div>


    <div id="default-carousel" class="relative w-full mt-8" data-carousel="slide">
        <div class="relative h-f overflow-hidden md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1517239320384-e08ad2c24a3e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://images.unsplash.com/photo-1459356067573-0a190eb1fcf5?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src=https://images.unsplash.com/photo-1521106581851-da5b6457f674?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>

        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="flex justify-center mt-8">
        <div class="w-full max-w-6xl">
            <div class="text-base font-bold text-center text-gray-500">
                <ul class="flex flex-wrap -mb-px justify-center" id="tabs">
                    <li class="me-2">
                        <button onclick="showTab('semua')"
                            class="tab-btn inline-block p-4 border-b-2 rounded-t-lg text-black border-black" data-tab="semua">{{__('articles/index.semua')}}</button>
                    </li>
                    <li class="me-2">
                        <button onclick="showTab('arkeologi')"
                            class="tab-btn inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-tab="arkeologi">{{__('articles/index.arkeologi')}}</button>
                    </li>
                    <li class="me-2">
                        <button onclick="showTab('wisata')"
                            class="tab-btn inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-tab="wisata">{{__('articles/index.wisata')}}</button>
                    </li>
                    <li class="me-2">
                        <button onclick="showTab('sains')"
                            class="tab-btn inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-tab="sains">{{__('articles/index.sains')}}</button>
                    </li>
                    <li class="me-2">
                        <button onclick="showTab('budaya')"
                            class="tab-btn inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-tab="budaya">{{__('articles/index.budaya')}}</button>
                    </li>
                    <li class="me-2">
                        <button onclick="showTab('konservasi')"
                            class="tab-btn inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300" data-tab="konservasi">{{__('articles/index.konservasi')}}</button>
                    </li>
                </ul>
            </div>

            <div class="p-4 text-gray-700 dark:text-gray-300">
                <div id="tab-semua" class="tab-content">
                    @if ($articles->count() > 0)
                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($articles as $article)
                                <div class="flex flex-col    shadow">
                                    <!-- Gambar -->
                                    <div class="h-56 w-full">
                                        <img src="{{ asset('storage/' . ($article->cover ? $article->cover : 'covers/default/default.jpg')) }}"
                                            alt="cover-image" class="w-full h-full object-cover" />
                                    </div>
                                    <!-- Konten -->
                                    <div class="p-4 flex flex-col">
                                        <!-- Judul -->
                                        <h6 class="text-slate-800 text-lg font-semibold leading-snug">
                                            {{ $article->title }}
                                        </h6>
                                        <!-- Tanggal -->
                                        <p class="text-sm text-gray-500 mt-2">
                                            {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }} · 
                                            {{ number_format_short($article->view_count) }} views
                                        </p>
                                        <!-- Deskripsi -->
                                        <p class="text-slate-600 text-sm leading-normal line-clamp-4 mt-2">
                                            {{ strip_tags($article->content) }}
                                        </p>
                                        <!-- Link Baca Selengkapnya -->
                                        <a href="{{ route('articles.show', $article->slug) }}"
                                            class="text-red-500 text-sm font-semibold hover:underline flex items-center gap-1 mt-2">
                                            {{__('articles/index.selengkapnya')}}
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-gray-500">Sedang Tidak ada berita.</p>
                    @endif
                </div>

                <!-- Kategori Tabs -->
                @foreach ($categories as $category)
                <div id="tab-{{ strtolower($category) }}" class="tab-content hidden">
                    @php
                        $categoryArticles = $articles->where('category.category_name', $category);
                    @endphp

                    @if ($categoryArticles->count() > 0)
                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($categoryArticles as $article)
                                <div class="flex flex-col shadow">
                                    <div class="h-56 w-full">
                                        <img src="{{ asset('storage/' . ($article->cover ? $article->cover : 'covers/default/default.jpg')) }}"
                                            alt="cover-image" class="w-full h-full object-cover" />
                                    </div>
                                    <div class="p-4 flex flex-col">
                                        <h6 class="text-slate-800 text-lg font-semibold leading-snug">{{ $article->title }}</h6>
                                        <p class="text-sm text-gray-500 mt-2">
                                            {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }} · 
                                            {{ number_format_short($article->view_count) }} views
                                        </p>
                                        <p class="text-slate-600 text-sm leading-normal line-clamp-4 mt-2">
                                            {{ strip_tags($article->content) }}
                                        </p>
                                        <a href="{{ route('articles.show', $article->slug) }}" 
                                            class="text-red-500 text-sm font-semibold hover:underline flex items-center gap-1 mt-2">
                                            {{__('articles/index.selengkapnya')}}
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-gray-500">Tidak ada artikel di kategori {{ $category }}.</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 pt-12">
        <div class="space-y-4-px-4">
            <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                    {{__('articles/index.artikel-populer')}}
                </h2>
            </div>

            @if ($popular_articles->count())
                <div class="flex flex-col gap-4">
                    @foreach ($popular_articles as $popular)
                        <div class="flex flex-col lg:flex-row items-start gap-4 shadow-sm border border-gray-200">
                            <!-- Gambar -->
                            <div class="w-full lg:w-1/3 h-50 overflow-hidden p-4">
                                <img src="{{ asset('storage/' . ($popular->cover ? $popular->cover : 'covers/default/default.jpg')) }}"
                                    alt="{{ $popular->title }}" class="w-full h-full object-cover">
                            </div>
                            <div class="w-full lg:w-2/3 pt-10">
                                <h3 class="text-lg font-semibold text-slate-800 mb-1">
                                    {{ $popular->title }}
                                </h3>
                                <p class="text-sm text-gray-500 mt-2">
                                    {{ \Carbon\Carbon::parse($popular->created_at)->diffForHumans() }} · 
                                    {{ number_format_short($popular->view_count) }} views
                                </p>
                                <p class="text-slate-600 text-xs leading-relaxed mb-3">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($popular->content), 150, '...') }}
                                </p>
                                <a href="{{ route('articles.show', $popular->slug) }}"
                                    class="text-orange-500 text-xs font-semibold hover:underline inline-flex items-center gap-1">
                                    {{__('articles/index.selengkapnya')}}
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif


        </div>
    </div>


    <div class="mt-12">
        @include('components.faq')
        @livewire('kotak_saran')
    </div>
@endsection

<script>
    function showTab(tabId) {
        const contents = document.querySelectorAll('.tab-content');
        const tabs = document.querySelectorAll('.tab-btn');
        contents.forEach(c => c.classList.add('hidden'));
        tabs.forEach(t => {
            t.classList.remove('text-black', 'border-black');
            t.classList.add('border-transparent');
        });

        document.getElementById('tab-' + tabId).classList.remove('hidden');
        const activeTab = Array.from(tabs).find(t => t.dataset.tab === tabId);
        if (activeTab) {
            activeTab.classList.remove('border-transparent');
            activeTab.classList.add('text-black', 'border-black');
        }
    }
</script>