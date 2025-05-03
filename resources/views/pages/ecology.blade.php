@extends('layouts.app')

@section('ecology')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner2.png') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl">Gua Pawon: {{__('pages/ecology.ekologi-geologi')}}</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">{{__('pages/ecology.temukan-kisah-1')}}
                <br/>{{__('pages/ecology.temukan-kisah-2')}}</p>
        </div>
    </section>

    {{-- Peta Geologi --}}
    <div class="max-w-6xl mx-auto px-4 py-10" id="Peta-geplogi">
        <div class="space-y-4-px-4">
            <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                    {{__('pages/ecology.peta-geologi')}}
                </h2>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-7 gap-6 md:gap-8 items-start">
            <div class="order-2 lg:order-1 lg:col-span-2 overflow-hidden shadow-md h-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5605024752927!2d107.43459057316073!3d-6.823183293174593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68fcf6e7a435c1%3A0x5b8a47f8a9635516!2sGua%20Pawon!5e0!3m2!1sen!2sid!4v1745424591786!5m2!1sen!2sid"
                    class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                {{-- <img src="{{ Vite::asset('resources/img/image 14.png') }}" alt="Gua Pawon"
                    class="w-full h-full object-cover object-center rounded" /> --}}
            </div>

            <div class="order-3 lg:order-2 lg:col-span-3 space-y-4 md:h-full flex flex-col justify-center">
                <p class="text-gray-700 text-base text-justify">
                    {{__('pages/ecology.peta-disamping')}}
                </p>
                <p class="text-gray-700 text-base text-justify">
                    {{__('pages/ecology.secara-litologi')}}
                </p>
            </div>

            {{-- Indeks --}}
            <div class="order-1 lg:order-3 lg:col-span-2">
                <h3 class="text-white text-lg border-b border-gray-300 pb-2 mb-4 bg-[#1A1006] px-3 py-2">{{__('pages/ecology.indeks')}}</h3>
                <ul class="space-y-3 text-black px-3">
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Peta-geologi" class="flex items-center">{{__('pages/ecology.peta-geologi')}}</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Flora" class="flex items-center">Flora</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Fauan" class="flex items-center">Fauna</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Folklore" class="flex items-center">{{__('pages/ecology.cerita-rakyat')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    {{-- flora --}}

    <div class="max-w-full container-lg w-full px-4 bg-[#1e1109]" id="Flora">
        <h3 class="text-2xl md:text-3xl font-bold text-center mb-6 text-white gap-36 pt-18">{{__('pages/ecology.flora-gua')}}</h3>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">
                {{-- content flora 1 --}}
                <div onclick="openModalcontent1()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/image 3e2.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">{{__('pages/ecology.pohon-jati')}}</h3>
                        <h5 class="text-lg text-white">(Tectona grandis)</h5>
                    </main>
                </div>
                {{-- modal flora 1 --}}
                <div id="modal"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out shadow-lg relative">
                        <button onclick="closeModalcontent1()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/pohonjatitransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">{{__('pages/ecology.pohon-jati')}}</h2>
                                <p class="text-gray-500 italic mb-4">(Tectona grandis)</p>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.pohon-jati-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.tinggi')}}</p>
                                        <p>30–40 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>650–850 kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>100–200 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- content flora 2 --}}
                <div onclick="openModalcontent2()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/95051558.jpg')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">{{__('pages/ecology.anggrek-liar')}}</h3>
                    </main>
                </div>
                {{-- modal flora 2 --}}
                <div id="modal2"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent2"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out  shadow-lg relative">
                        <button onclick="closeModalcontent2()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/anggrekliartransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">{{__('pages/ecology.anggrek-liar')}}</h2>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.anggrek-liar-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.tinggi')}}</p>
                                        <p>30–40 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>650–850 kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>100–200 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- content flora 3 --}}
                <div onclick="openModalcontent3()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/eee.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">{{__('pages/ecology.mahoni')}}</h3>
                        <h5 class="text-lg text-white">(Swietenia macrophylla)</h5>
                    </main>
                </div>
                {{-- modal flora 3 --}}
                <div id="modal3"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent3"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out shadow-lg relative">
                        <button onclick="closeModalcontent3()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/Mahonitransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">{{__('pages/ecology.mahoni')}}</h2>
                                <p class="text-gray-500 italic mb-4">(Swietenia macrophylla)</p>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.mahoni-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.tinggi')}}</p>
                                        <p>30–40 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>500–850 kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>150-200 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- content flora 4 --}}
                <div onclick="openModalcontent4()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/ffff.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">{{__('pages/ecology.alang-alang')}}</h3>
                        <h5 class="text-lg text-white">(Imperata cylindrica)</h5>
                    </main>
                </div>
                {{-- modal flora 4 --}}
                <div id="modal4"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent4"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out  shadow-lg relative">
                        <button onclick="closeModalcontent4()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/alangalangtransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">{{__('pages/ecology.alang-alang')}}</h2>
                                <p class="text-gray-500 italic mb-4">(Imperata cylindrica)</p>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.alang-alang-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.tinggi')}}</p>
                                        <p>0,5–2 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>0,2–0,5 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>3–5 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Accordion flora --}}

        <div id="accordion-collapse" data-accordion="collapse"
            class="pt-2 pb-6 bg-transparent text-white max-w-6xl mx-auto px-4 ">

            {{-- flora 1 --}}
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                    aria-controls="accordion-collapse-body-1">
                    <span>{{__('pages/ecology.rotan')}} (Calamus spp.)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/rotan.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.rotan-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- flora 2 --}}
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span>{{__('pages/ecology.singkong')}} (Manihot esculenta)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/singkong.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.singkong-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- flora 3 --}}
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span>{{__('pages/ecology.pisang')}} (Musa spp.)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/pisang.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.pisang-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- flora 4 --}}
            <h2 id="accordion-collapse-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                    aria-controls="accordion-collapse-body-4">
                    <span>{{__('pages/ecology.palawijaya')}}</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/palawija.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.palawijaya-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Fauna --}}
        <h3 class="text-2xl md:text-3xl font-bold text-center mb-6 text-white gap-36 pt-18">{{__('pages/ecology.fauna-gua')}}</h3>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">

                {{-- content fauna 1 --}}
                <div onclick="openModalcontent5()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/elang tikus.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">{{__('pages/ecology.elang-tikus')}}</h3>
                        <h5 class="text-lg text-white">(Elanus caeruleus)</h5>
                    </main>
                </div>
                {{-- modal fauna 1 --}}
                <div id="modal5"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent5"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out shadow-lg relative">
                        <button onclick="closeModalcontent5()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/elangtikustransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">{{__('pages/ecology.elang-tikus')}}</h2>
                                <p class="text-gray-500 italic mb-4">(Elanus caeruleus)</p>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.elang-tikus-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.panjang')}}</p>
                                        <p>30–38 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>200-300 g kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>8-12 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- content fauna 2 --}}
                <div onclick="openModalcontent6()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/alap alap.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">{{__('pages/ecology.alap-alap')}}</h3>
                        <p class="text-gray-500 italic mb-4">(Falco spp)</p>
                    </main>
                </div>
                {{-- modal fauna 2 --}}
                <div id="modal6"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent6"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out  shadow-lg relative">
                        <button onclick="closeModalcontent6()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/alapalaptransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">Alap - Alap</h2>
                                <p class="text-gray-500 italic mb-4">(Falco spp)</p>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.alap-alap-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.panjang')}}</p>
                                        <p>25 - 50 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>200 - 1500 g</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>7 - 15 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- content fauna 3 --}}
                <div onclick="openModalcontent7()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/monyet ekor pjg.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">{{__('pages/ecology.monyet-panjang')}}</h3>
                        <h5 class="text-lg text-white">(Macaca fascicularis)</h5>
                    </main>
                </div>
                {{-- modal fauna 3 --}}
                <div id="modal7"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent7"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out shadow-lg relative">
                        <button onclick="closeModalcontent7()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/monyetekorpjgtransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">{{__('pages/ecology.monyet-panjang')}}</h2>
                                <p class="text-gray-500 italic mb-4">(Macaca fascicularis)</p>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.monyet-panjang-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.panjang')}}</p>
                                        <p>40 - 60 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>3–7 kg</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>20–30 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- content fauna 4 --}}
                <div onclick="openModalcontent8()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/tikus hutan.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">Tikus Hutan</h3>
                        <h5 class="text-lg text-white">(Rattus Tiomanicus)</h5>
                    </main>
                </div>
                {{-- modal fauna --}}
                <div id="modal8"
                    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex justify-center items-center transition-opacity duration-300 invisible opacity-0">
                    <!-- Modal Content -->
                    <div id="modalContent8"
                        class="bg-[#fdf4e3] w-full max-w-5xl max-h-[90vh] overflow-auto p-10 transform translate-x-full transition-transform duration-500 ease-in-out  shadow-lg relative">
                        <button onclick="closeModalcontent8()" class="absolute top-4 right-4 text-2xl text-black">✕</button>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                            <img src="{{Vite::asset('../resources/img/tikushutantransparan.png')}}"
                                class="w-full max-h-[400px] object-contain" alt="Tree" />
                            <div>
                                <h2 class="text-3xl font-bold">{{__('pages/ecology.tikus-hutan')}}</h2>
                                <p class="text-gray-500 italic mb-4">(Rattus Tiomanicus)</p>
                                <p class="text-gray-700 mb-4">
                                    {{__('pages/ecology.tikus-hutan-desc')}}
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.panjang')}}</p>
                                        <p>10 - 20 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.berat')}}</p>
                                        <p>50 - 250 g</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{__('pages/ecology.usia')}}</p>
                                        <p>1 - 3 {{__('pages/ecology.tahun')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Accordion fauna --}}

        <div id="accordion-collapse2" data-accordion="collapse2"
            class="pt-2 pb-6 bg-transparent text-white max-w-6xl mx-auto px-4 ">

            {{-- fauna 1 --}}
            <h2 id="accordion-collapse-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                    aria-controls="accordion-collapse-body-5">
                    <span>{{__('pages/ecology.walet')}} (Aerodramus fuciphagus)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/walet.png')}}" alt="walet"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.walet-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- flora 2 --}}
            <h2 id="accordion-collapse-heading-6">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                    aria-controls="accordion-collapse-body-6">
                    <span>{{__('pages/ecology.landak-jawa')}} (Hystrix javanica)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/landakjawa.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.landak-jawa-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- fauna 3 --}}
            <h2 id="accordion-collapse-heading-7">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                    aria-controls="accordion-collapse-body-7">
                    <span>{{__('pages/ecology.kelelawar')}} (Microchiroptera)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/kelelawar.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.kelelawar-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fauna 4 --}}
            <h2 id="accordion-collapse-heading-8">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                    aria-controls="accordion-collapse-body-8">
                    <span> {{__('pages/ecology.musang-hutan')}} (Paradoxurus hermaphroditus)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-8">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/musanghutan.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.musang-hutan-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fauna 4 --}}
            <h2 id="accordion-collapse-heading-8">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                    aria-controls="accordion-collapse-body-9">
                    <span> {{__('pages/ecology.lipan')}} (Chilopoda)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-9">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/lipan.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.lipan-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- fauna 4 --}}
            <h2 id="accordion-collapse-heading-8">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-white border-b-2 border-white-100"
                    data-accordion-target="#accordion-collapse-body-10" aria-expanded="false"
                    aria-controls="accordion-collapse-body-10">
                    <span> {{__('pages/ecology.laba-gua')}} (Troglobiont Spiders)</span>
                    <svg data-accordion-icon class="w-4 h-4 rotate-90 shrink-0 transition-transform duration-300"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>

            <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-10">
                <div class="p-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-start">
                        <div class="flex justify-center md:justify-start">
                            <img src="{{Vite::asset('../resources/img/labalabagua.png')}}" alt="Rotan"
                                class="w-full h-auto object-cover rounded-md shadow-md transition-transform duration-300 hover:scale-105" />
                        </div>
                        <div class="md:col-span-2 text-white text-justify leading-relaxed">
                            <p>
                                {{__('pages/ecology.laba-gua-desc')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Folklore --}}

    <div class="max-w-6xl mx-auto px-4" id="Folklore">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center my-10">
            <div class="space-y-4 px-4">
                <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                    <h2 class="text-dark mb-2 text-2xl font-semibold ">
                        {{__('pages/ecology.cerita-rakyat')}}
                    </h2>
                </div>
                <div class="w-full max-w-2xl">
                    <img src="{{ Vite::asset('resources/img/Folklore.png') }}" alt="Gua Pawon"
                        class="w-full h-100 object-cover object-center rounded" />
                </div>
            </div>

            <p class="text-gray-700 text-justify text-base">
                {{__('pages/ecology.cerita-rakyat-desc')}}
            </p>
        </div>
    </div>

    {{-- script untuk buka modal --}}
    <script>
        // content 1
        function openModalcontent1() {
            const modal = document.getElementById('modal');
            const modalContent = document.getElementById('modalContent');
            modal.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent1() {
            const modal = document.getElementById('modal');
            const modalContent = document.getElementById('modalContent');
            modalContent.classList.add('translate-x-full');
            setTimeout(() => {
                modal.classList.add('invisible', 'opacity-0');
            }, 500);
        }
        // content 2
        function openModalcontent2() {
            const modal2 = document.getElementById('modal2');
            const modalContent2 = document.getElementById('modalContent2');
            modal2.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent2.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent2() {
            const modal = document.getElementById('modal2');
            const modalContent = document.getElementById('modalContent2');
            modalContent2.classList.add('translate-x-full');
            setTimeout(() => {
                modal2.classList.add('invisible', 'opacity-0');
            }, 500);
        }
        // content 3
        function openModalcontent3() {
            const modal3 = document.getElementById('modal3');
            const modalContent3 = document.getElementById('modalContent3');
            modal3.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent3.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent3() {
            const modal = document.getElementById('modal3');
            const modalContent = document.getElementById('modalContent3');
            modalContent3.classList.add('translate-x-full');
            setTimeout(() => {
                modal3.classList.add('invisible', 'opacity-0');
            }, 500);
        }
        // content 4
        function openModalcontent4() {
            const modal4 = document.getElementById('modal4');
            const modalContent4 = document.getElementById('modalContent4');
            modal4.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent4.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent4() {
            const modal = document.getElementById('modal4');
            const modalContent = document.getElementById('modalContent4');
            modalContent4.classList.add('translate-x-full');
            setTimeout(() => {
                modal4.classList.add('invisible', 'opacity-0');
            }, 500);
        }

        // content 5
        function openModalcontent5() {
            const modal5 = document.getElementById('modal5');
            const modalContent5 = document.getElementById('modalContent5');
            modal5.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent5.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent5() {
            const modal5 = document.getElementById('modal5');
            const modalContent5 = document.getElementById('modalContent5');
            modalContent5.classList.add('translate-x-full');
            setTimeout(() => {
                modal5.classList.add('invisible', 'opacity-0');
            }, 500);
        }

        // content 6
        function openModalcontent6() {
            const modal6 = document.getElementById('modal6');
            const modalContent6 = document.getElementById('modalContent6');
            modal6.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent6.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent6() {
            const modal6 = document.getElementById('modal6');
            const modalContent6 = document.getElementById('modalContent6');
            modalContent6.classList.add('translate-x-full');
            setTimeout(() => {
                modal6.classList.add('invisible', 'opacity-0');
            }, 500);
        }

        // content 7
        function openModalcontent7() {
            const modal7 = document.getElementById('modal7');
            const modalContent7 = document.getElementById('modalContent7');
            modal7.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent7.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent7() {
            const modal7 = document.getElementById('modal7');
            const modalContent7 = document.getElementById('modalContent7');
            modalContent7.classList.add('translate-x-full');
            setTimeout(() => {
                modal7.classList.add('invisible', 'opacity-0');
            }, 500);
        }

        // content 8
        function openModalcontent8() {
            const modal8 = document.getElementById('modal8');
            const modalContent8 = document.getElementById('modalContent8');
            modal8.classList.remove('invisible', 'opacity-0');
            setTimeout(() => {
                modalContent8.classList.remove('translate-x-full');
            }, 10);
        }

        function closeModalcontent8() {
            const modal = document.getElementById('modal8');
            const modalContent = document.getElementById('modalContent8');
            modalContent8.classList.add('translate-x-full');
            setTimeout(() => {
                modal8.classList.add('invisible', 'opacity-0');
            }, 500);
        }
    </script>

    @livewire('kotak_saran')

@endsection