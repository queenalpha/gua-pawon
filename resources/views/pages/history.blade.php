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

    <div class="max-w-6xl mx-auto px-4">
        <div class="justify-items-end">
            <div class="border-[#D8CC6C] border-r-[5px] pl-5 me-2">
                <h2 class="text-dark mb-2 text-2xl font-semibold mb-3 mx-2">
                    Timeline penemuan Gua Pawon
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
                            Gua Pawon telah dikenal oleh masyarakat sekitar sebagai gua alami di kawasan karst Citatah,
                            Padalarang, Jawa Barat. Sebelum tahun 2000, gua ini hanya diketahui sebagai bagian dari bentang
                            alam
                            yang menarik dan memiliki cerita rakyat yang berkembang di kalangan warga setempat. Namun, belum
                            ada
                            penelitian arkeologis yang mendalam mengenai potensi sejarahnya.
                        </p>
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-1 md:order-2">
                        <img src="{{Vite::asset('../resources/img/timeline1.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 order-1">
                        <img src="{{Vite::asset('../resources/img/timeline2.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-2">
                        <p class="text-lg font-bold">2000</p>
                        <p class="text-gray-700 text-sm">
                            Pada tahun 2000, Balai Arkeologi Bandung mulai melakukan penelitian setelah adanya laporan
                            geologi
                            yang mengindikasikan keberadaan lapisan-lapisan budaya di Gua Pawon. Penelitian awal ini membuka
                            jalan bagi ekskavasi dan pengungkapan sejarah yang tersembunyi di dalam gua tersebut.
                        </p>
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 text-right order-2 md:order-1">
                        <p class="text-lg font-bold">2003-2004</p>
                        <p class="text-gray-700 text-sm">
                            Ekskavasi besar-besaran dilakukan oleh tim arkeologi dari Balai Arkeologi Bandung. Mereka
                            berhasil
                            menemukan berbagai temuan penting seperti alat-alat batu, sisa makanan, dan yang paling
                            mengejutkan
                            adalah kerangka manusia purba yang terkubur di dalam gua tersebut.
                        </p>
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-1 md:order-2">
                        <img src="{{Vite::asset('../resources/img/timeline3.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 order-1">
                        <img src="{{Vite::asset('../resources/img/timeline4.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-2">
                        <p class="text-lg font-bold">2003-2005</p>
                        <p class="text-gray-700 text-sm">
                            Analisis terhadap kerangka manusia yang ditemukan menunjukkan bahwa manusia Gua Pawon memiliki
                            ciri-ciri khas Austro-Melanesia, memberikan wawasan baru mengenai migrasi manusia purba di
                            kawasan
                            Asia Tenggara. Temuan ini menjadi sangat penting dalam studi antropologi dan sejarah manusia
                            Indonesia.
                        </p>
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 text-right order-2 md:order-1">
                        <p class="text-lg font-bold">&lt;2005</p>
                        <p class="text-gray-700 text-sm">
                            Ekskavasi lanjutan berhasil menemukan berbagai artefak penting seperti alat batu, tulang hewan
                            hasil
                            perburuan, dan peralatan rumah tangga dari zaman prasejarah. Ini memperkuat dugaan bahwa Gua
                            Pawon
                            pernah menjadi tempat tinggal manusia purba dalam jangka waktu yang cukup lama.
                        </p>
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-1 md:order-2">
                        <img src="{{Vite::asset('../resources/img/timeline5.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                </div>

                <div class="mb-20 flex flex-col md:flex-row items-center w-full relative z-10">
                    <div class="md:w-1/2 md:pr-8 order-1">
                        <img src="{{Vite::asset('../resources/img/timeline6.png')}}"
                            class="rounded shadow-md w-full h-[200px] object-cover" />
                    </div>
                    <div class="md:w-1/2 md:pl-8 md:mt-0 order-2">
                        <p class="text-lg font-bold">2005&gt;</p>
                        <p class="text-gray-700 text-sm">
                            Setelah pengakuan pentingnya temuan ini, Gua Pawon ditetapkan sebagai salah satu situs arkeologi
                            paling penting di Jawa Barat. Sejak saat itu, situs ini terus menjadi objek penelitian ilmiah
                            dan
                            juga mulai dikenal sebagai destinasi wisata edukasi sejarah bagi masyarakat umum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-8 grid grid-cols-1 md:grid-cols-2 bg-[#1E1109] text-white font-sans">
        <div class="h-auto md:h-[480px] bg-cover bg-center"
            style="background-image: url('{{Vite::asset('../resources/img/Alatbatu.png')}}')"></div>

        <div class="p-6 md:p-10 flex flex-col justify-between">
            <div>
                <h2 class="text-3xl md:text-4xl font-semibold mb-4 md:mb-6 text-center">Alat Batu</h2>
                <p class="text-sm md:text-base leading-relaxed mb-3 md:mb-4 text-justify">
                    Ekskavasi di Gua Pawon telah mengungkap berbagai artefak yang memberikan gambaran tentang kehidupan
                    manusia prasejarah
                    di Jawa Barat. Salah satu temuan utama adalah alat-alat batu yang menunjukkan bahwa manusia di gua ini
                    telah
                    mengembangkan keterampilan dalam berburu dan mengolah makanan. Alat-alat batu yang ditemukan meliputi
                    kapak genggam,
                    yang kemungkinan digunakan untuk berburu dan memotong daging, serta serpihan batu tajam yang berfungsi
                    sebagai pisau
                    atau alat pemotong.

                    Selain itu, ditemukan juga alat serut, yang diduga digunakan untuk mengolah kayu atau kulit hewan.
                    Alat-alat ini
                    sebagian besar terbuat dari batu andesit atau batu keras lainnya, yang menunjukkan bahwa masyarakat
                    prasejarah telah
                    memahami teknik mempertajam dan membentuk batu untuk berbagai keperluan.
                </p>
            </div>

            <div class="font-medium flex justify-center gap-2 mt-6">
                <div class="flex items-center">
                    <img src="{{Vite::asset('../resources/img/Logo-pawon.png')}}" alt="logo-pawon" class="w-4 h-4">
                    <span class="ms-2">Gua Pawon</span>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4">
        <div class="border-[#D8CC6C] border-l-[5px] pl-5 me-2">
            <h2 class="text-dark mb-2 text-2xl font-semibold mb-3 mx-2">
                Keseluruhan
            </h2>
        </div>
        <p class="text-gray-700 text-justify mb-4">
            Secara keseluruhan, penemuan artefak di Gua Pawon memberikan wawasan yang luas mengenai kehidupan manusia
            prasejarah di
            Jawa Barat. Alat batu menunjukkan keterampilan berburu dan mengolah makanan, sementara tulang hewan dan sisa
            makanan
            membuktikan bahwa mereka memiliki pola makan yang beragam. Perhiasan dari gigi hiu dan moluska menandakan adanya
            budaya
            dan sistem sosial, sedangkan fragmen tembikar menunjukkan awal perkembangan teknologi gerabah. Keberadaan sisa
            arang dan
            api unggun juga membuktikan bahwa mereka telah mengenal dan memanfaatkan api dalam kehidupan sehari-hari.
            Penelitian
            lebih lanjut diharapkan dapat mengungkap lebih banyak informasi mengenai kehidupan dan budaya manusia prasejarah
            di Gua
            Pawon, serta bagaimana mereka beradaptasi dengan lingkungannya selama ribuan tahun.
        </p>
    </div>

    <div class="py-10">
        @livewire('kotak_saran')
    </div>
@endsection