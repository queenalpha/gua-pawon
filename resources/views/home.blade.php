<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/img/Asset 11.png') }}">
    <title>Gua Pawon</title>

</head>

<body>
    @include('components.navbar')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover lg:h-100 xl:h-150"
        style="background-image: url('{{ asset('storage/images/banner1.jpg') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-3xl ">Gua Pawon: Warisan Sejarah,
                Jejak Peradaban</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl">Temukan kisah manusia purba yang pernah hidup
                di Gua Pawon. <br> Jelajahi sejarah, budaya, dan
                peninggalan arkeologi dalam satu platform edukatif.</p>
        </div>
    </section>

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
                <img src="{{ Vite::asset('resources/img/image 14.png') }}" alt="Gua"
                    class="w-full h-full object-cover transition duration-300 ease-in transform group-hover:scale-110">
            </div>

            <div class="md:col-span-1 relative overflow-hidden rounded-sm shadow-lg group h-64 md:h-96">
                <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Gua"
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
                <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Sejarah"
                    class="w-full h-48 object-cover">
                <a href="/history"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Sejarah</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Ekologi & Geologi"
                    class="w-full h-48 object-cover">
                <a href="/ekologi-geologi"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Ekologi & Geologi</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Upaya konservasi"
                    class="w-full h-48 object-cover">
                <a href="/konservasi"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Upaya konservasi</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Penelitian"
                    class="w-full h-48 object-cover">
                <a href="/penelitian"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Penelitian</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Artikel"
                    class="w-full h-48 object-cover">
                <a href="/artikel"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Artikel</span>
                    <span>→</span>
                </a>
            </div>

            <div class="relative overflow-hidden rounded shadow-lg group">
                <img src="{{ Vite::asset('resources/img/image 12.png') }}" alt="Kontak dan Lokasi"
                    class="w-full h-48 object-cover">
                <a href="/kontak-lokasi"
                    class="bg-[#2A1B0F] text-white flex items-center justify-between px-4 py-2 hover:bg-[#3a2919] transition">
                    <span>Kontak dan Lokasi</span>
                    <span>→</span>
                </a>
            </div>
        </div>

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
        <div class="space-y-6 my-10 px-4">
            <section class="dark:bg-dark bg-white">
                <div class="mx-auto px-4 sm:container">
                    <div class="border-[#D8CC6C] border-l-[5px] pl-5">
                        <h2 class="text-dark mb-2 text-2xl font-semibold ">
                            3D Preview
                        </h2>
                    </div>
                    <p class="text-gray-700 mt-2 text-justify">
                        Anda dapat melihat setiap sudut gua dengan perspektif yang nyata, seolah-olah berada langsung di
                        dalamnya.
                        Jelajahi keunikan formasi batuan, lorong-lorong bersejarah, dan keindahan alam Goa Pawon tanpa
                        batasan ruang
                        dan waktu.
                        Dengan 3D preview ini, sejarah dan keindahan.
                    </p>
                </div>
            </section>
            <div class="relative w-full overflow-hidden rounded-lg shadow-lg">
                <div class="aspect-video w-full">
                    <iframe title="The Cave Windows of Pawon Cave" frameborder="0" allowfullscreen
                        mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/5c47ee6cb7184f6ca82cbc8945432c65/embed"
                        class="w-full h-full rounded-md"></iframe>
                </div>
            </div>
        </div>

        @include('components.faq')

    </div>
</body>
@include('components.footer')
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</html>