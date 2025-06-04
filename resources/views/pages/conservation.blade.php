@extends('layouts.app')
@section('title', "Gua Pawon - " . __('pages/conservation.conservation'))

@section('conservation')
    <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply bg-cover h-[70vh] md:h-[80vh] lg:h-[70vh]"
        style="background-image: url('{{ Vite::asset('../resources/img/banner2.png') }}')">
        <div class="px-4 max-w-screen-xl text-left py-24 lg:py-50 lg:mx-10 xl:py-70">
            <h1 class="mb-4 text-4xl font-extrabold text-white md:text-5xl lg:text-4xl">Gua Pawon:
                Nilai penting dan Pemanfaatan</h1>
            <p class="mb-8 lg:text-lg font-normal text-gray-300 lg:text-2xl" id="peta-geologi">
                Temukan kisah manusia purba yang pernah hidup di Gua Pawon. Jelajahi sejarah, budaya, dan
                peninggalan arkeologi dalam satu platform edukatif.
            </p>
        </div>
    </section>

    <div class="max-w-8xl lg:mx-15 px-4 py-12">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3">
                Nilai-nilai penting Gua pawon
            </h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 items-start mb-20" id="Nilai-nilai-penting-Gua-pawon">
            <div class="order-3 lg:order-2 lg:col-span-2 space-y-4 md:h-full flex flex-col justify-center">
                <p class="text-gray-700 lg:text-lg text-justify text-base">
                    Temuan prasejarah di Gua Pawon dan juga gua-gua yang lain yang berada di situs Gua Pawon sampai sekarang
                    merupakan masih sebagai satu-satunya tinggalan prasejarah dari periode mesolitik di Jawa bagian barat.
                    Temuan di selama lebih dari satu dekade menjadi ajang penelitian dan telah mendapat sorotan dari
                    berbagai kalangan, baik kalangan media cetak, media elektronik, serta kalangan ilmuwan dari berbagai
                    disiplin ilmu.
                </p>
                <p class="text-gray-700 lg:text-lg text-justify text-base">
                    Hal itu terutama berkaitan dengan penemuan manusia di situs Gua Pawon tersebut. Manusia prasejarah yang
                    ditemukan di Gua Pawon memiliki karakteristik unik dalam proses penguburannya pada masa lalu, selain itu
                    ditemukan berasosiasi dengan artefak batu dan berbagai jenis fragmen tulang binatang dan moluska yang
                    berasal dari air tawar dan lalut, dan merupakan satu fenomena yang perlu dikaji lebih mendalam.
                </p>
                <p class="text-gray-700 lg:text-lg text-justify text-base">
                    Oleh sebab itu, penemuan manusia dan budaya prasejarah di Gua Pawon bukanlah sebuah titik akhir dari
                    suatu penelitian,
                    akan tetapi justru merupakan titik awal yang harus terus digiatkan untuk mengisi khazanah ilmu
                    pengetahuan Indonesia dan
                    dunia.
                </p>
            </div>

            <div class="order-1 lg:order-3 lg:col-span-1">
                <h3 class="text-white text-base lg:text-lg border-b border-gray-300 pb-2 mb-4 bg-[#1A1006] px-3 py-2">
                    {{__('pages/history.indeks')}}
                </h3>
                <ul class="space-y-3 text-black px-3">
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Nilai-nilai-penting-Gua-pawon" class="flex items-center">Nilai-Nilai Penting Gua Pawon</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer">
                        <a href="#Nilai-Penting-Pengetahuan-Arkeologi" class="flex items-center">Nilai Penting Ilmu Pengetahun Arkeologi</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer"
                        id="timeline">
                        <a href="#Nilai-Penting-Pengembangan-Teknik-dan-Metodologi-Penelitian" class="flex items-center">Nilai Penting Pengembangan Teknik dan Metodologi
                            Penelitian</a>
                    </li>
                    <li class="border-b border-gray-300 pb-2 hover:text-gray-300 transition-colors cursor-pointer"
                        id="timeline">
                        <a href="#Pemanfaatan-Hasil-Penulisan-Karya-Ilmiah" class="flex items-center">Pemanfaatan Hasil Penulisan Karya Ilmiah</a>
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
                Nilai Penting Pengetahuan Arkeologi
            </h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-2 gap-6 md:gap-8 items-stretch mb-20" id="Nilai-Penting-Pengetahuan-Arkeologi">
            <div class="order-3 lg:order-2 lg:col-span-1 space-y-4 flex flex-col justify-center">
                <p class="text-gray-700 lg:text-lg text-justify">
                    Temuan rangka manusia di Gua Pawon menunjukkan adanya pola penguburan unik, yaitu posisi terlipat
                    (flexed burial), yang
                    jarang ditemukan di Indonesia. Beberapa gua lain yang juga menunjukkan pola serupa adalah Song Terus,
                    Song Keplek, Gua
                    Sodong, Gua Lawa, dan Gua Marjan, dengan usia sekitar 9.800 tahun lalu.
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    Rangka manusia di Gua Pawon diperkirakan berumur antara 5.600 hingga 12.000 tahun. Hal ini memperkaya
                    data arkeologi
                    tentang praktik penguburan masa lalu di Asia Tenggara, khususnya pada masa transisi akhir Pleistosen ke
                    awal Holosen.
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    Dibandingkan situs gua lainnya, Gua Pawon menunjukkan jejak hunian yang lebih panjang dan beragam, yaitu
                    antara 5.600 hingga 11.000 tahun lalu, sehingga menjadikannya sebagai salah satu situs penting dalam
                    studi prasejarah di kawasan tersebut.
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
                Nilai Penting Pengembangan Teknik dan Metodologi Penelitian
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
                    Penelitian di Gua Pawon sejak 2003, dan terutama setelah 2012, berkembang dari fokus pelestarian menjadi pendekatan interdisipliner. Disiplin seperti geologi, paleoiklim, dan palinologi dilibatkan untuk memahami pembentukan gua dan lingkungan masa lalu. Teknik pengambilan sampel untuk analisis pertanggalan juga diterapkan, menggunakan metode Asetilen (C₂H₂) dan Benzena (C₆H₆) di laboratorium di Bandung dan Jakarta.
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    Gua Pawon menjadi contoh penting kolaborasi antara ilmu eksakta dan sosial, mengingat data arkeologi bersifat terbatas dan tidak terbaharui. Pendekatan terencana memungkinkan penggalian informasi yang lebih mendalam dan akurat, sekaligus menjadi acuan bagi penelitian situs prasejarah lainnya.
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    Temuan di situs ini mencakup artefak dari batu, tulang, kerang, hingga sisa makanan dan rangka manusia dari lima periode berbeda. Secara stratigrafi, ditemukan lapisan budaya Neolitik (0–100 cm) dan Mesolitik (100–320 cm). Namun, aspek seperti pola makan dan usia hidup masih minim dibahas.
                </p>
                <p class="text-gray-700 lg:text-lg text-justify">
                    Melalui pendekatan Odontologi Forensik, analisis gigi dan rahang manusia Pawon mengungkap informasi seperti usia, jenis kelamin, kebersihan gigi, serta kandungan serat dan pati yang terkait dengan pola makan. Teknologi seperti CBCT 3D dan SEM digunakan untuk menganalisis kalkulus gigi secara mendalam, membuka peluang baru dalam pengembangan metode penelitian arkeologi dan lintas disiplin.
                </p>
            </div>
        </div>



        <div class="border-[#D8CC6C] border-l-[5px] pl-5">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3" id="Pemanfaatan-Hasil-Penulisan-Karya-Ilmiah">
                Pemanfaatan Hasil Penulisan Karya Ilmiah
            </h2>
        </div>
        <div class="mx-auto">
            <p class="text-base lg:text-lg text-justify text-gray-700">
                Hasil penelitian arkeologi di Gua Pawon telah dimanfaatkan secara luas, terutama dalam dunia pendidikan lintas disiplin.
                Data arkeologis dari situs ini telah menjadi bahan penulisan empat skripsi dan satu tesis di Program Studi Arkeologi FIB
                UI, serta skripsi di UGM dan Udayana. Analisis interdisipliner yang melibatkan Odontologi Forensik juga menghasilkan
                sekitar 34 karya ilmiah, termasuk skripsi, jurnal, dan prosiding di lingkungan Fakultas Kedokteran Gigi Unpad. Selain
                itu, data Gua Pawon dimanfaatkan dalam bidang lingkungan, terbukti dari tesis yang ditulis di UI dan ITB, serta dalam
                pengembangan pariwisata, yang dijadikan dasar penulisan skripsi dan tesis di STP Bandung dan Telkom University.
            </p>
        </div>


        <div class="mt-5 block w-full rounded-lg border border-black shadow-lg">
            <div class="p-5 text-justify space-y-4 max-w-6xl mx-auto">
                <h3 class="text-2xl font-bold text-center">Kebanggaan Daerah dan Pengembangan Destinasi Wisata  Jawa Barat</h3>
                <p class="text-gray-700 lg:text-lg">
                    Sejak ditemukan pada tahun 2000 dan mulai diteliti secara arkeologis pada 2003, situs Gua Pawon telah menarik perhatian
                    berbagai kalangan, mulai dari peneliti lintas disiplin hingga pemerintah daerah. Penelitian yang dilakukan oleh Balai
                    Arkeologi Jawa Barat berhasil mengungkap budaya prasejarah yang kemudian menjadi dasar pengembangan destinasi wisata di
                    Jawa Barat.
                </p>
                <p class="text-gray-700 lg:text-lg">
                    Saat ini, Gua Pawon dan kawasan Gunung Pawon telah berkembang menjadi salah satu objek wisata unggulan provinsi, dengan
                    peningkatan kunjungan wisatawan yang turut menyumbang pendapatan daerah. Pemerintah setempat memanfaatkan hasil
                    penelitian ini dengan merevitalisasi situs dan merencanakan pembangunan Museum Gua Pawon.
                </p>
                <p class="text-gray-700 lg:text-lg">
                    Pengembangan destinasi ini merupakan bagian dari upaya berkelanjutan untuk menggabungkan pelestarian warisan budaya
                    dengan potensi ekonomi daerah. Penelitian dan pemanfaatan situs terus dirancang agar memberikan manfaat jangka panjang
                    bagi masyarakat serta menjadi kebanggaan daerah Jawa Barat.
                </p>
            </div>
        </div>
    </div>

    @include('components.faq')
    @livewire('kotak_saran')
@endsection