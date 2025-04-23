@extends('layouts.app')

@section('history')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner2.png') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl">Gua Pawon: Sejarah Gua</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">Temukan kisah manusia purba yang pernah hidup
                di
                Gua Pawon. <br /> Jelajahi sejarah, budaya, dan peninggalan arkeologi.</p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-12" id="Sejarah">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                Sejarah Awal
            </h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-7 gap-6 md:gap-8 items-start">
            <div class="order-2 lg:order-1 lg:col-span-2 overflow-hidden shadow-md h-full">
                <img src="{{ Vite::asset('resources/img/image 14.png') }}" alt="Gua Pawon"
                    class="w-full h-full object-cover object-center rounded" />
            </div>

            <div class="order-3 lg:order-2 lg:col-span-3 space-y-4 md:h-full flex flex-col justify-center">
                <p class="text-gray-700 text-base text-justify">
                    Secara geologis, Gua Pawon terbentuk sebagai bagian dari Formasi Rajamandala, yang merupakan batuan
                    karbonat berumur Oligosen Akhir hingga Miosen Awal (mariyanto). Formasi ini mengalami proses sedimentasi
                    di lingkungan laut dangkal dan berkembang menjadi terumbu karang purba (kusumadinata). Seiring
                    berjalannya waktu, proses pendolomitan dan pelarutan air meteorit menyebabkan terbentuknya gua-gua di
                    dalam batuan gamping, termasuk Gua Pawon (maryanto).
                </p>
                <p class="text-gray-700 text-base text-justify">
                    Kawasan karst Citatah dikenal sebagai wilayah dengan banyak gua alamiah, yang terbentuk akibat proses
                    geologi jangka panjang. Struktur geologi di daerah ini menunjukkan adanya patahan dan rekahan yang
                    memungkinkan air masuk ke dalam batuan gamping dan melarutkannya, menciptakan rongga yang berkembang
                    menjadi gua (maryanto). Beberapa gua di sekitar Citatah juga memiliki nilai sejarah dan arkeologi,
                    tetapi Gua Pawon adalah salah satu yang paling terkenal karena temuan manusianya.
                </p>
            </div>

            <div class="order-1 lg:order-3 lg:col-span-2">
                <h3 class="text-white text-lg border-b border-gray-300 pb-2 mb-4 bg-[#1A1006] px-3 py-2">Indeks</h3>
                <ul class="space-y-3 text-black px-3">
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Sejarah" class="flex items-center">Sejarah</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Timeline" class="flex items-center">Timeline</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#" class="flex items-center">Fauna di sekitar gua</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 py-">
        <div class="justify-items-end">
            <div class="border-[#D8CC6C] border-r-[5px] pl-5 me-2">
                <h2 class="text-dark mb-2 text-2xl font-semibold mb-3 mx-2">
                    Timeline penemuan Gua Pawon
                </h2>
            </div>
        </div>
        <div class="container mx-auto px-4 py-8" id="Timeline">
            <div class="relative wrap overflow-hidden">
                <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border left-1/2"></div>
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-12 h-12 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
                    </div>
                    <div class="order-1 bg-gray-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Event Title</h3>
                        <p class="text-gray-700 leading-tight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum in nisi commodo, aliquet velit ac, dapibus elit.</p>
                    </div>
                </div>
                <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-12 h-12 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">2</h1>
                    </div>
                    <div class="order-1 bg-gray-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Event Title</h3>
                        <p class="text-gray-700 leading-tight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum in nisi commodo, aliquet velit ac, dapibus elit.</p>
                    </div>
                </div>
                <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-12 h-12 rounded-full">
                        <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
                    </div>
                    <div class="order-1 bg-gray-400 rounded-lg shadow-xl w-5/12 px-6 py-4">
                        <h3 class="mb-3 font-bold text-gray-800 text-xl">Event Title</h3>
                        <p class="text-gray-700 leading-tight">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum in nisi commodo, aliquet velit ac, dapibus elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection