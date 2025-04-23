@extends('layouts.app')

@section('ecology')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner2.png') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl">Gua Pawon: Ekologi dan Geologi</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">Temukan kisah manusia purba yang pernah hidup
                di
                Gua Pawon. <br /> Jelajahi sejarah, budaya, dan peninggalan arkeologi.</p>
        </div>
    </section>

    <div class="max-w-6xl mx-auto px-4 py-10" id="Peta-geplogi">
        <div class="space-y-4-px-4">
            <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                    Peta Geologi
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
                    Peta geologi di samping menunjukkan kondisi geologi daerah Citatah, Bandung Barat, dan sekitarnya,
                    termasuk lokasi
                    Lintasan Gua Pawon. Berdasarkan peta ini, Gua Pawon terletak dalam Formasi Rajamandala yang tersusun
                    atas batugamping.
                    Formasi ini mengalami berbagai proses geologi, termasuk pendolomitan dan pelapukan, yang membentuk
                    struktur gua yang ada
                    saat ini.
                </p>
                <p class="text-gray-700 text-base text-justify">
                    Secara litologi, daerah sekitar Gua Pawon didominasi oleh batugamping terumbu dan batupasir kuarsa,
                    seperti yang
                    ditunjukkan oleh warna merah muda (Omcl) dan hijau (Mts) pada peta. Formasi ini merupakan bagian dari
                    lingkungan laut
                    dangkal yang berkembang pada masa lalu, sebelum mengalami proses tektonik yang mengangkatnya ke
                    permukaan. Proses ini
                    menyebabkan terbentuknya sistem gua akibat pelarutan batugamping oleh air tanah yang kaya akan karbon
                    dioksida.
                </p>
            </div>

            <div class="order-1 lg:order-3 lg:col-span-2">
                <h3 class="text-white text-lg border-b border-gray-300 pb-2 mb-4 bg-[#1A1006] px-3 py-2">Indeks</h3>
                <ul class="space-y-3 text-black px-3">
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Peta-geologi" class="flex items-center">Peta Geologi</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Flora" class="flex items-center">Flora</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Fauan" class="flex items-center">Fauna</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Folklore" class="flex items-center">Folklore</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4" id="Folklore">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center my-10">
            <div class="space-y-4 px-4">
                <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                    <h2 class="text-dark mb-2 text-2xl font-semibold ">
                        Folklore
                    </h2>
                </div>
                <div class="w-full max-w-2xl">
                    <img src="{{ Vite::asset('resources/img/Folklore.png') }}" alt="Gua Pawon"
                        class="w-full h-100 object-cover object-center rounded" />
                </div>
            </div>

            <p class="text-gray-700 text-justify text-base">
                Salah satu legenda yang sering dihubungkan dengan gua ini adalah kisah Sangkuriang dan Dayang Sumbi, yang
                juga
                berkaitan
                dengan terbentuknya Gunung Tangkuban Perahu dan Danau Bandung Purba. Dalam legenda ini, Sangkuriang hampir
                berhasil
                menyelesaikan tantangan membendung sungai dan membuat perahu dalam semalam, tetapi Dayang Sumbi menggagalkan
                rencananya
                dengan mengelabui waktu fajar. Karena marah, Sangkuriang menendang perahu yang hampir selesai, yang kemudian
                menjadi
                Gunung Tangkuban Perahu. Gua Pawon sering disebut sebagai salah satu tempat yang berhubungan dengan kisah
                ini, di
                mana
                beberapa versi menyatakan bahwa gua ini pernah menjadi tempat pengasingan Dayang Sumbi sebelum ia menetap di
                tempat
                lain. Selain itu, keberadaan Gua Pawon di kawasan yang dahulu merupakan bagian dari Danau Bandung Purba juga
                memperkuat
                keterkaitannya dengan mitos Sangkuriang.
            </p>
        </div>
    </div>
@endsection