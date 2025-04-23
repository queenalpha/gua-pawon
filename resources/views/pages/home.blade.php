<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ Vite::asset('../resources/img/Logo-pawon.png') }}">
    <title>Gua Pawon</title>

</head>

<body>
    @include('components.navbar')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner1.jpg') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl">Gua Pawon: Warisan Sejarah,
                Jejak
                Peradaban</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">Temukan kisah manusia purba yang pernah hidup
                di
                Gua Pawon. <br /> Jelajahi sejarah, budaya, dan peninggalan arkeologi.</p>
        </div>
    </section>
    {{-- <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover lg:h-100 xl:h-150"
        style="background-image: url('{{ asset('storage/images/banner1.jpg') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl ">Gua Pawon: Warisan Sejarah,
                Jejak Peradaban</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">Temukan kisah manusia purba yang pernah hidup
                di Gua Pawon. <br> Jelajahi sejarah, budaya, dan
                peninggalan arkeologi dalam satu platform edukatif.</p>
        </div>
    </section> --}}
    <div class="max-w-6xl mx-auto px-4 py-10 text-justify text-base space-y-5">
        <p>Gua Pawon adalah sebuah gua alami dan situs purbakala yang terletak di Desa Gunung Masigit, Kecamatan
            Cipatat,
            Kabupaten Bandung Barat, atau sekitar 25 km arah barat Kota Bandung. Lokasinya berada di kawasan perbukitan
            kapur (karst) yang dikenal sebagai Karst Citatah. Gua ini menjadi salah satu tempat yang menarik untuk
            dikunjungi karena nilai sejarah dan arkeologinya.</p>
        <p>Secara geologis, para ahli menjelaskan kawasan Bandung saat ini sebagai cekungan danau purba. Hal tersebut
            dapat
            dibuktikan dari banyaknya ditemui fosil binatang air tawar. Kawasan Karst Citatah adalah gugusan pegunungan
            kapur yang membentang dari Padalarang hingga Rajamandala dan merupakan saksi bisu dari proses geologi yang
            berlangsung jutaan tahun lalu. Kawasan ini memiliki banyak gua yang terbentuk secara alami, salah satunya
            adalah
            Gua Pawon.</p>
        <p>Dikutip dari hima.fib.ugm.ac.id, Gua Pawon merupakan bukti kehidupan manusia prasejarah karena ditemukan
            sisa-sisa kerangka manusia yang diperkirakan berasal dari masa Mesolitikum (zaman batu tengah). Penelitian
            yang
            dilakukan menunjukkan bahwa gua ini pernah dihuni oleh manusia purba yang hidup dengan cara berburu dan
            meramu.
            Temuan arkeologis seperti alat batu, tulang belulang, dan pecahan gerabah semakin memperkuat pentingnya
            situs
            ini dalam memahami kehidupan masa lalu.</p>
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
        <p>Gua dengan ketinggian 709 Mdpl ini memiliki luas 38×16 meter dan tinggi 3 meter. Daya tarik utama Gua Pawon
            adalah pemandangan alamnya yang memukau dan nilai sejarahnya yang tinggi. Pengunjung dapat menikmati
            panorama
            pegunungan kapur yang indah serta belajar tentang kehidupan manusia purba melalui berbagai informasi dan
            artefak
            yang dipamerkan.</p>
        <ul class="list-disc list-inside space-y-2">
            <li>
                Memiliki keindahan alam yang eksotis, adanya lereng bukit hijau yang asri di sekelilingnya dan
                batuan karst peninggalan
                zaman purba yang masih kokoh.
            </li>
            <li>
                Dapat melakukan berbagai kegiatan outdoor yang menantang seperti cliff climbing dan jelajah gua atau
                area karst di
                dataran tinggi.
            </li>
            <li>
                Fasilitas museum tour untuk melihat langsung koleksi-koleksi benda purbakala.
            </li>
            <li>
                Spot foto instagenik dengan background keindahan alam.
            </li>
        </ul>
    </div>

    <div class="lg:py-8 max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 my-10">
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Sejarah" class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>Sejarah</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Ekologi" class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>Ekologi & Geologi</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Konservasi"
                class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>Upaya konservasi</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Penelitian"
                class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>Penelitian</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Artikel" class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>Artikel</span> <span>→</span>
            </a>
        </div>
        <div class="overflow-hidden rounded shadow-lg">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Kontak" class="w-full h-48 object-cover" />
            <a href="#" class="bg-[#2A1B0F] text-white flex justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                <span>Kontak & Lokasi</span> <span>→</span>
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
                    Selamat datang di Gua Pawon, situs bersejarah yang menyimpan jejak kehidupan manusia purba di
                    Bandung Barat.
                    Dalam video tour ini, kita akan menelusuri keindahan alam serta peninggalan arkeologi yang
                    tersembunyi di
                    dalam gua. Saksikan bagaimana dinding-dinding batu kapur yang megah membingkai cerita masa lalu,
                    sementara
                    pemandangan perbukitan sekitar menambah pesona tempat ini. Jelajahi sejarah, budaya, dan keindahan
                    alam Goa
                    Pawon dalam pengalaman virtual yang menarik!
                </p>
                <p class="text-gray-700 text-justify">
                    Temukan keindahan Gua Pawon dari setiap keindahan pada tiap sisinya melalui video berikut.
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

        <div class="max-w-6xl mx-auto px-4 my-10 py-8">
            <div class="border-[#D8CC6C] border-l-[5px] pl-5 mb-6">
                <h2 class="text-dark text-2xl font-semibold">
                    Berita Seputar Gua Pawon
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
                            <a href="/berita">Lihat Kumpulan Berita Gua Pawon</a>
                        </div>
                    </div>
                </div>
            @else
                <p class="text-center text-gray-500 ">Tidak ada berita ditemukan.</p>
            @endif
        </div>

        <div class="max-w-6xl mx-auto px-4 my-10 py-8 ">
            <div class="border-[#D8CC6C] border-l-[5px] pl-5 mb-6">
                <h2 class="text-dark text-2xl font-semibold">
                    3D Preview
                </h2>
            </div>
            <p class="text-gray-700 text-justify">
                Anda dapat melihat setiap sudut gua dengan perspektif yang nyata, seolah-olah berada langsung di dalamnya. Jelajahi
                keunikan formasi batuan, lorong-lorong bersejarah, dan keindahan alam Goa Pawon tanpa batasan ruang dan waktu. Dengan 3D
                preview ini, sejarah dan keindahan.
            </p>
        
        <div id="carousel-3d" class="relative w-full my-4" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden rounded-lg md:h-[480px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="aspect-video w-full h-full">
                        <iframe title="The Cave Windows of Pawon Cave" frameborder="0" allowfullscreen mozallowfullscreen="true"
                            webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                            execution-while-out-of-viewport execution-while-not-rendered web-share
                            src="https://sketchfab.com/models/5c47ee6cb7184f6ca82cbc8945432c65/embed"
                            class="w-full h-full rounded-md"></iframe>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="aspect-video w-full h-full">
                        <iframe title="The Chambers of Pawon Cave" frameborder="0" allowfullscreen mozallowfullscreen="true"
                            webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                            execution-while-out-of-viewport execution-while-not-rendered web-share
                            src="https://sketchfab.com/models/84d53f0bd8a24344b0ef4f4fda9b00a7/embed"
                            class="w-full h-full rounded-md"></iframe>
                    </div>
                </div>
            </div>
        
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </button>
        </div>


        </div>
        @include('components.faq')
    </div>
</body>
@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</html>