@extends('layouts.app')
@section('title', "Gua Pawon - " . __('pages/history.sejarah'))


@section('history')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner2.png') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl">Gua Pawon:
                {{__('pages/history.sejarah-gua')}}
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl" id="sejarah">{{__('pages/history.deskripsi-1')}}
                <br />
                {{__('pages/history.deskripsi-2')}}
            </p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-12">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                {{__('pages/history.sejarah-awal')}}
            </h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-7 gap-6 md:gap-8 items-start">
            <div class="order-2 lg:order-1 lg:col-span-2 overflow-hidden shadow-md h-full">
                <img src="{{ Vite::asset('resources/img/sejarahawal.jpg') }}" alt="Gua Pawon"
                    class="w-full h-108 object-cover object-center rounded" />
            </div>

            <div class="order-3 lg:order-2 lg:col-span-3 space-y-4 md:h-full flex flex-col justify-center">
                <p class="text-gray-700 text-base text-justify">
                    {{__('pages/history.paragraf-1')}}
                </p>
                <p class="text-gray-700 text-base text-justify">
                    {{__('pages/history.paragraf-2')}}
                </p>
            </div>

            <div class="order-1 lg:order-3 lg:col-span-2">
                <h3 class="text-white text-lg border-b border-gray-300 pb-2 mb-4 bg-[#1A1006] px-3 py-2">
                    {{__('pages/history.indeks')}}
                </h3>
                <ul class="space-y-3 text-black px-3">
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#sejarah" class="flex items-center">{{__('pages/history.sejarah')}}</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#timeline" class="flex items-center">{{__('pages/history.linimasa')}}</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer"
                        id="timeline">
                        <a href="#keseluruhan" class="flex items-center">{{__('pages/history.keseluruhan')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4">
        <div class="justify-items-end">
            <div class="border-[#D8CC6C] border-r-[5px] pl-5 me-2">
                <h2 class="text-dark mb-2 text-2xl font-semibold mb-3 mx-2">
                    {{__('pages/history.timeline-penemuan')}}
                </h2>
            </div>
        </div>
        <div class="container mx-auto px-4 py-8 max-h-[600px] overflow-y-scroll inset-shadow-sm">
            <div class="relative">
                <div
                    class="absolute hidden md:block border-r-2 border-gray-300 h-full left-1/2 transform -translate-x-1/2 z-0">
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 text-right order-2 md:order-1">
                        <p class="text-lg font-bold">&lt;2000</p>
                        <p class="text-gray-700 text-sm">
                            {{__('pages/history.sebelum-2000')}}
                        </p>
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-1 md:order-2">
                        <img src="{{Vite::asset('../resources/img/2000.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 order-1">
                        <img src="{{Vite::asset('../resources/img/2000.jpg')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-2">
                        <p class="text-lg font-bold">2000</p>
                        <p class="text-gray-700 text-sm">
                            {{__('pages/history.tahun-2000')}}
                        </p>
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 text-right order-2 md:order-1">
                        <p class="text-lg font-bold">2003-2004</p>
                        <p class="text-gray-700 text-sm">
                            {{__('pages/history.tahun-2004')}}
                        </p>
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-1 md:order-2">
                        <img src="{{Vite::asset('../resources/img/s2000.jpg')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 order-1">
                        <img src="{{Vite::asset('../resources/img/kerangka.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-2">
                        <p class="text-lg font-bold">2003-2005</p>
                        <p class="text-gray-700 text-sm">
                            {{__('pages/history.tahun-2005')}}
                        </p>
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 text-right order-2 md:order-1">
                        <p class="text-lg font-bold">&lt;2005</p>
                        <p class="text-gray-700 text-sm">
                            {{__('pages/history.kurang-2005')}}
                        </p>
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-1 md:order-2">
                        <img src="{{Vite::asset('../resources/img/2005.jpg')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 order-1">
                        <img src="{{Vite::asset('../resources/img/2005s.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-2">
                        <p class="text-lg font-bold">2005&gt;</p>
                        <p class="text-gray-700 text-sm">
                            {{__('pages/history.lebih-2005')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="custom-carousel" class="relative w-full my-8 pt-8" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-[480px] overflow-hidden">
            <!-- Slide 1 -->
            <div class="hidden duration-700 ease-in-out grid grid-cols-1 md:grid-cols-2 bg-[#1E1109] text-white font-sans"
                data-carousel-item="active">
                <div class="h-auto md:h-[480px] bg-cover bg-center"
                    style="background-image: url('{{ Vite::asset('../resources/img/alat-batu.jpg') }}')">
                </div>
                <div class="p-6 md:p-10 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-semibold mb-4 md:mb-6 text-center">
                            {{ __('pages/history.alat-batu') }}
                        </h2>
                        <p class="text-sm md:text-base leading-relaxed mb-3 md:mb-4 text-justify">
                            {{ __('pages/history.alat-batu-desc') }}
                        </p>
                    </div>
                    <div class="font-medium flex justify-center gap-2 mt-6" id="keseluruhan">
                        <div class="flex items-center">
                            <img src="{{ Vite::asset('../resources/img/Logo-pawon.png') }}" alt="logo-pawon"
                                class="w-4 h-4">
                            <span class="ms-2">Gua Pawon</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hidden duration-700 ease-in-out grid grid-cols-1 md:grid-cols-2 bg-[#1E1109] text-white font-sans"
                data-carousel-item="active">
                <div class="h-auto md:h-[480px] bg-cover bg-center"
                    style="background-image: url('{{ Vite::asset('../resources/img/artefakbinatang.jpg') }}')">
                </div>
                <div class="p-6 md:p-10 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-semibold mb-4 md:mb-6 text-center">
                            {{ __('pages/history.artefak-tulang') }}
                        </h2>
                        <p class="text-sm md:text-base leading-relaxed mb-3 md:mb-4 text-justify">
                            {{ __('pages/history.artefak-tulang-desc') }}
                        </p>
                    </div>
                    <div class="font-medium flex justify-center gap-2 mt-6" id="keseluruhan">
                        <div class="flex items-center">
                            <img src="{{ Vite::asset('../resources/img/Logo-pawon.png') }}" alt="logo-pawon"
                                class="w-4 h-4">
                            <span class="ms-2">Gua Pawon</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hidden duration-700 ease-in-out grid grid-cols-1 md:grid-cols-2 bg-[#1E1109] text-white font-sans"
                data-carousel-item="active">
                <div class="h-auto md:h-[480px] bg-cover bg-center"
                    style="background-image: url('{{ Vite::asset('../resources/img/perhiasanbinatang.png') }}')">
                </div>
                <div class="p-6 md:p-10 flex flex-col justify-between">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-semibold mb-4 md:mb-6 text-center">
                            {{ __('pages/history.perhiasan-binatang') }}
                        </h2>
                        <p class="text-sm md:text-base leading-relaxed mb-3 md:mb-4 text-justify">
                            {{ __('pages/history.perhiasan-binatang-desc') }}
                        </p>
                    </div>
                    <div class="font-medium flex justify-center gap-2 mt-6" id="keseluruhan">
                        <div class="flex items-center">
                            <img src="{{ Vite::asset('../resources/img/Logo-pawon.png') }}" alt="logo-pawon"
                                class="w-4 h-4">
                            <span class="ms-2">Gua Pawon</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/30 group-hover:bg-white/50">
                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-white/30 group-hover:bg-white/50">
                <svg aria-hidden="true" class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        </button>
    </div>


    <div class="max-w-6xl mx-auto px-4">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5 me-2">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3 mx-2">
                {{__('pages/history.keseluruhan')}}
            </h2>
        </div>
        <p class="text-gray-700 text-justify mb-4">
            {{__('pages/history.keseluruhan-desc')}}
        </p>
    </div>

    <div class="py-10">
        @livewire('kotak_saran')
    </div>
@endsection