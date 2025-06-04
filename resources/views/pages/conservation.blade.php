@extends('layouts.app')
@section('title', "Gua Pawon - " . __('pages/conservation.conservation'))

@section('conservation')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner2.png') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-4xl">Gua Pawon:
                {{__('pages/conservation.nilai-penting')}}</h1>
            <p class="mb-8 lg:text-lg font-normal text-gray-300 lg:text-2xl" id="peta-geologi">
                {{__('pages/conservation.temukan-kisah')}}
            </p>
        </div>
    </section>

    <div class="max-w-8xl lg:mx-15 px-4 py-12">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                {{__('pages/conservation.nilai-penting-pawon')}}
            </h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 items-start mb-20" id="Nilai-nilai-penting-Gua-pawon">
            <div class="order-3 lg:order-2 lg:col-span-2 space-y-4 md:h-full flex flex-col justify-center">
                <p class="text-gray-700 lg:text-lg text-justify text-base">
                    {{__('pages/conservation.temuan-prasejarah')}}
                </p>
                <p class="text-gray-700 lg:text-lg text-justify text-base">
                    {{__('pages/conservation.hal-itu-berkaitan')}}
                </p>
                <p class="text-gray-700 lg:text-lg text-justify text-base">
                    {{__('pages/conservation.oleh-sebab-itu')}}
                </p>
            </div>

            <div class="order-1 lg:order-3 lg:col-span-1">
                <h3 class="text-white text-base lg:text-lg border-b border-gray-300 pb-2 mb-4 bg-[#1A1006] px-3 py-2">
                    {{__('pages/history.indeks')}}
                </h3>
                <ul class="space-y-3 text-black px-3">
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Nilai-nilai-penting-Gua-pawon" class="flex items-center">{{__('pages/conservation.nilai-nilai-penting')}}</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Nilai-Penting-Pengetahuan-Arkeologi" class="flex items-center">{{__('pages/conservation.nilai-penting-arkeologi')}}</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer"
                        id="timeline">
                        <a href="#Nilai-Penting-Pengembangan-Teknik-dan-Metodologi-Penelitian" class="flex items-center">{{__('pages/conservation.teknik-dan-metodologi')}}</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer"
                        id="timeline">
                        <a href="#Pemanfaatan-Hasil-Penulisan-Karya-Ilmiah" class="flex items-center">{{__('pages/conservation.pemanfaatan-hasil')}}</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="overflow-hidden rounded-2xl shadow-lg mb-20">
            <img src="{{ Vite::asset('resources/img/konservasi-pawon.jpg') }}" alt="konservasi-pawon"
                class="w-full h-[500px] object-cover" />
        </div>

        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                {{__('pages/conservation.nilai-penting-pengetahuan-arkeologi')}}
            </h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-2 gap-6 md:gap-8 items-stretch mb-20" id="Nilai-Penting-Pengetahuan-Arkeologi">
            <div class="order-3 lg:order-2 lg:col-span-1 space-y-4 flex flex-col justify-center">
                <p class="text-gray-700 lg:text-lg text-justify">
                    {{__('pages/conservation.temuan-rangka-manusia')}}
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    {{__('pages/conservation.rangka-manusia-diperkirakan')}}
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    {{__('pages/conservation.dibandingkan-situs-lainnya')}}
                </p>
            </div>

            <div class="order-1 lg:order-3 lg:col-span-1 h-full">
                <div class="h-full overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ Vite::asset('resources/img/konservasi-pawon.jpg') }}" alt="konservasi-pawon"
                        class="w-full h-full object-cover" />
                </div>
            </div>
        </div>


        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                {{__('pages/conservation.teknik-dan-metodologi')}}
            </h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-2 gap-6 md:gap-8 items-stretch mb-20" id="Nilai-Penting-Pengembangan-Teknik-dan-Metodologi-Penelitian">
            <div class="order-1 lg:order-1 lg:col-span-1 h-full flex flex-col justify-center">
                <div class="h-full overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ Vite::asset('resources/img/konservasi-pawon.jpg') }}" alt="konservasi-pawon"
                        class="w-full h-full object-cover" />
                </div>
            </div>

            <div class="order-2 lg:order-3 lg:col-span-1 space-y-4 ">
                <p class="text-gray-700 lg:text-lg text-justify">
                    {{__('pages/conservation.penelitian-sejak-2003')}}
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    {{__('pages/conservation.menjadi-contoh-penting')}}
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    {{__('pages/conservation.temuan-mencakup')}}
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    {{__('pages/conservation.odontologi-forensik')}}
                </p>
            </div>
        </div>



        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3" id="Pemanfaatan-Hasil-Penulisan-Karya-Ilmiah">
                {{__('pages/conservation.pemanfaatan-hasil')}}
            </h2>
        </div>
        <div class="mx-auto">
            <p class="text-base lg:text-lg text-justify text-gray-700">
                {{__('pages/conservation.hasil-arkeologi')}}
            </p>
        </div>


        <div class="mt-5 block w-full rounded-lg border border-black shadow-lg">
            <div class="p-5 text-justify space-y-4 max-w-6xl mx-auto">
                <h3 class="text-2xl font-bold text-center">{{__('pages/conservation.kebanggaan-daerah')}}</h3>
                <p class="text-gray-700 lg:text-lg">
                    {{__('pages/conservation.sejak-ditemukan-2000')}}
                </p>
                <p class="text-gray-700 lg:text-lg">
                    {{__('pages/conservation.gunung-pawon')}}
                </p>
                <p class="text-gray-700 lg:text-lg">
                    {{__('pages/conservation.pengembangan-destinasi')}}
                </p>
            </div>
        </div>
    </div>

    @include('components.faq')
    @livewire('kotak_saran')
@endsection
