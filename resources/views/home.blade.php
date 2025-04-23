<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('img/Asset 11.png') }}">
    <title>Gua Pawon</title>

</head>

<body>
    @include('components.navbar')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[90vh]"
        style="background-image: url('{{ asset('storage/images/banner1.jpg') }}')">
        <div class="px-4 max-w-screen-xl mx-auto text-left py-24 lg:py-32">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-6xl">Gua Pawon: Warisan Sejarah,
                Jejak
                Peradaban</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 md:text-xl">Temukan kisah manusia purba yang pernah hidup
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

<<<<<<< HEAD
    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-4 pb-10">
        <div class="md:col-span-2 overflow-hidden rounded shadow-lg group h-64 md:h-96">
            <img src="{{ Vite::asset('resources/img/image 14.png') }}" alt="Gua Pawon"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-300" />
        </div>
        <div class="overflow-hidden rounded shadow-lg group h-64 md:h-96">
            <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Gua Pawon"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-300" />
=======
    <div class="container mx-auto text-base">
        <article class="text-justify py-5 mx-10">
            <p>
                Gua Pawon adalah sebuah gua alami dan situs purbakala yang terletak di Desa Gunung Masigit, Kecamatan
                Cipatat, Kabupaten
                Bandung Barat, atau sekitar 25 km arah barat Kota Bandung. Merupakan sebuah tempat yang penting bagi
                orang Sunda karena
                di sanalah tempat berkumpulnya sesepuh Sunda yang sekarang menduduki bagian barat pulau Jawa. Di sana
                pernah ditemukan
                kerangka manusia purba yang konon adalah nenek moyang orang Sunda (masih diteliti di balai Arkeolog
                Bandung).
            </p>
            <br>
            <p>
                Secara geologis, para ahli menjelaskan kawasan Bandung saat ini sebagai cekungan danau purba hasil
                letusan Gunung Sunda
                Purba yang mengering dan mulai ditempati manusia. Di sisi lain, para ahli percaya kelompok manusia telah
                menghuni di
                tatar Sunda, tepatnya di Gua Pawon pada 5.600-9.500 tahun lalu.
            </p>
            <br>
            <p>
                Dikutip dari hima.fib.ugm.ac.id, Gua Pawon merupakan bukti kehidupan manusia prasejarah, Di dalam gua
                tersebut ditemukan
                beberapa bukti indikasi peninggalan manusia prasejarah, seperti serpihan-serpihan (serpih obsidian,
                jasper, tatal, dan
                lainnya), fragmen, serta sisa rangka manusia.
            </p>
        </article>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
            <div class="md:col-span-2 relative overflow-hidden rounded-sm shadow-lg group h-64 md:h-96">
                <img src="{{ asset('img/image 14.png') }}" alt="Gua"
                    class="w-full h-full object-cover transition duration-300 ease-in transform group-hover:scale-110">
            </div>

            <div class="md:col-span-1 relative overflow-hidden rounded-sm shadow-lg group h-64 md:h-96">
                <img src="{{ asset('img/image 12.png') }}" alt="Gua"
                    class="w-full h-full object-cover transition duration-300 ease-in transform group-hover:scale-110">
            </div>
        </div>


        <article class="text-justify text-sm py-5 mx-10 xl:text-xl lg:text-base">
            <p>
                Gua dengan ketinggian 709 Mdpl ini memiliki luas 38×16 meter. Hingga sekarang, gua ini masih terjaga
                dengan baik, bahkan
                menjadi salah satu objek destinasi menarik bagi wisatawan. Adapun beberapa daya tariknya ialah:
            </p>
            <ul class="list-disc list-inside ms-4">
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
        </article>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 ">
            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ asset('img/image 12.png') }}" alt="Sejarah"
                    class="w-full h-48 object-cover">
                <a href="/history"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Sejarah</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ asset('img/image 12.png') }}" alt="Ekologi & Geologi"
                    class="w-full h-48 object-cover">
                <a href="/ekologi-geologi"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Ekologi & Geologi</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ asset('img/image 12.png') }}" alt="Upaya konservasi"
                    class="w-full h-48 object-cover">
                <a href="/konservasi"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Upaya konservasi</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ asset('img/image 12.png') }}" alt="Penelitian"
                    class="w-full h-48 object-cover">
                <a href="/penelitian"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Penelitian</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ asset('img/image 12.png') }}" alt="Artikel"
                    class="w-full h-48 object-cover">
                <a href="/artikel"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Artikel</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ asset('img/image 12.png') }}" alt="Kontak dan Lokasi"
                    class="w-full h-48 object-cover">
                <a href="/kontak-lokasi"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Kontak dan Lokasi</span>
                    <span>→</span>
                </a>
            </div>
>>>>>>> develop-news
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

    <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 my-10">
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
                    </div>
                </div>
            @else
                <p class="text-center text-gray-500">Tidak ada berita ditemukan.</p>
            @endif
        </div>

        @include('components.faq')
    </div>
</body>
@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</html>