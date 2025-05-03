@extends('layouts.app')

@section('title', 'Jurnal Gua-Pawon')
@section('jurnal gua-pawon')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner2.png') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl">Gua Pawon: Penelitian</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">
                Temukan kisah manusia purba yang pernah hidup di Gua Pawon. Jelajahi sejarah, budaya, dan
                peninggalan arkeologi dalam satu platform edukatif.
            </p>
        </div>
    </section>

    <div class="p-10 justify-items-center">
        <form action="{{ route('journals.search') }}" method="GET" class="relative max-w-6xl w-full">
            <input name="query" value="{{ isset($query) ? $query : '' }}"
                class="appearance-none border-2 pl-10 bg-[#F4F4F4] border-gray-300 hover:border-orange-900 transition-colors rounded-md w-full h-15 py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-900 focus:border-orange-600 focus:shadow-outline"
                type="text" placeholder="Cari Penelitian Gua Pawon" />

            <div class="absolute right-0 inset-y-0 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-3 h-5 w-5 text-gray-400 hover:text-gray-500"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>

            <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-gray-500" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </form>
    </div>


    <div class="bg-[#F4F4F4] p-8 flex flex-col items-center">
        @foreach ($journals as $research)
            <a href="{{ $research->url_doi }}" class="block w-full max-w-6xl bg-white border border-gray-200 shadow-sm mb-4"
                target="_blank">
                <div class="p-4">
                    <h5 class="mb-2 text-2xl font-bold text-black">
                        {{ $research->title }}
                    </h5>
                    <p class="mb-2 font-normal text-black">
                        {{ \Carbon\Carbon::parse($research->publish_date)->translatedFormat('j F Y') }}
                    </p>
                    <p class="mb-2 font-normal font-semibold text-black">
                        {{ $research->author }}
                    </p>
                    <p class="mb-2 font-normal text-black line-clamp-4">
                        {{ $research->abstract }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>

    {{-- <nav aria-label="Page navigation example">
        <ul class="inline-flex -space-x-px text-base h-20">
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    < </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page"
                    class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    > </a>
            </li>
        </ul>
    </nav> --}}

@endsection