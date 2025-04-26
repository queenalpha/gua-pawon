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

    {{-- Peta Geologi --}}

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

            {{-- Indeks --}}

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


    {{-- flora --}}

    <div class="max-w-full container-lg w-full px-4 bg-[#1e1109]" id="Flora">
        <h3 class="text-2xl md:text-3xl font-bold text-center mb-6 text-white gap-36 pt-18">Flora disekitar Gua</h3>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">
                {{-- content flora 1 --}}
                <div onclick="openModalcontent1()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/image 3e2.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">Pohon Jati</h3>
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
                                <h2 class="text-3xl font-bold">Pohon Jati</h2>
                                <p class="text-gray-500 italic mb-4">(Tectona grandis)</p>
                                <p class="text-gray-700 mb-4">
                                    Pohon jati adalah spesies kayu keras tropis yang terkenal dengan ketahanan dan keindahan
                                    serat kayunya. Daunnya besar, berbentuk oval, dan dapat digunakan sebagai bahan pewarna
                                    alami. Pohon ini tumbuh subur di daerah tropis dengan curah hujan sedang dan tanah
                                    berdrainase baik. Kayu jati mengandung minyak alami yang membuatnya tahan terhadap
                                    serangan rayap, jamur, dan perubahan cuaca, sehingga sering digunakan dalam pembuatan
                                    furnitur, konstruksi, dan kapal.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">Tinggi</p>
                                        <p>30–40 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>650–850 kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>100–200 tahun</p>
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
                        <h3 class="text-2xl font-medium text-white">Anggrek Liar</h3>
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
                                <h2 class="text-3xl font-bold">Anggrek Liar</h2>
                                <p class="text-gray-700 mb-4">
                                    Anggrek liar yang tumbuh di sekitar gua sering kali termasuk spesies epifit yang
                                    menempel pada batang pohon atau batuan kapur. Mereka beradaptasi dengan lingkungan
                                    lembab dan teduh, memanfaatkan kelembaban udara serta air yang merembes melalui
                                    bebatuan. Anggrek ini memiliki akar udara yang dapat menyerap nutrisi dari lingkungan
                                    sekitar. Bunganya indah dan sering kali memiliki aroma khas yang menarik serangga
                                    penyerbuk seperti lebah dan kupu-kupu. Di kawasan Gua Pawon, keberadaan anggrek liar
                                    menunjukkan keseimbangan ekosistem yang masih alami meskipun menghadapi ancaman dari
                                    aktivitas manusia.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">Tinggi</p>
                                        <p>30–40 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>650–850 kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>100–200 tahun</p>
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
                        <h3 class="text-2xl font-medium text-white">Mahoni</h3>
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
                                <h2 class="text-3xl font-bold">Mahoni</h2>
                                <p class="text-gray-500 italic mb-4">(Swietenia macrophylla)</p>
                                <p class="text-gray-700 mb-4">
                                    Mahoni adalah pohon besar yang sering ditemukan di daerah tropis, termasuk sekitar
                                    kawasan Gua Pawon. Pohon ini memiliki batang lurus dengan kulit berwarna cokelat
                                    kemerahan dan daun majemuk yang rimbun. Kayunya terkenal kuat dan tahan lama, sering
                                    digunakan dalam industri mebel dan konstruksi. Mahoni mampu tumbuh di tanah yang kurang
                                    subur, termasuk lingkungan berbatu kapur seperti di sekitar gua. Selain itu, pohon ini
                                    memiliki manfaat ekologis sebagai penyerap polusi udara dan penyedia habitat bagi
                                    berbagai satwa liar, seperti burung dan serangga
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">Tinggi</p>
                                        <p>30–40 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>500–850 kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>150-200 tahun</p>
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
                        <h3 class="text-2xl font-medium text-white">Alang - alang</h3>
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
                                <h2 class="text-3xl font-bold">Alang - Alang</h2>
                                <p class="text-gray-500 italic mb-4">(Imperata cylindrica)</p>
                                <p class="text-gray-700 mb-4">
                                    Alang-alang adalah tumbuhan rumput yang tumbuh liar di berbagai habitat, termasuk daerah
                                    berbatu seperti sekitar Gua Pawon. Tumbuhan ini memiliki daun panjang, tajam, dan
                                    berujung runcing, dengan warna hijau saat muda dan berubah kekuningan saat mengering.
                                    Sistem perakarannya yang kuat membuat alang-alang sulit diberantas dan sering dianggap
                                    sebagai gulma di lahan pertanian. Meskipun begitu, alang-alang memiliki manfaat ekologis
                                    sebagai penahan erosi dan sebagai habitat bagi berbagai serangga dan hewan kecil. Selain
                                    itu, alang-alang sering dimanfaatkan oleh masyarakat untuk bahan atap tradisional, pakan
                                    ternak, dan obat herbal.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">Tinggi</p>
                                        <p>0,5–2 m</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>0,2–0,5 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>3–5 tahun</p>
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
                    <span>Rotan (Calamus spp.)</span>
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
                                Rotan adalah tumbuhan merambat dari keluarga palma yang tumbuh di hutan tropis. Di sekitar
                                Gua Pawon, rotan
                                ditemukan dalam bentuk sisa botani yang menunjukkan bahwa masyarakat purba memanfaatkannya,
                                kemungkinan besar
                                sebagai bahan tali, keranjang, atau alat bantu kehidupan sehari-hari. Berdasarkan kajian
                                arkeologi, sisa rotan
                                tersebut diperkirakan berasal dari 9.500–5.500 tahun yang lalu, menunjukkan adanya
                                keterampilan teknis dan
                                pemanfaatan sumber daya hutan yang cerdas oleh manusia purba.
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
                    <span>Singkong (Manihot esculenta)</span>
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
                                Singkong merupakan tanaman umbi-umbian yang banyak digunakan sebagai sumber pangan
                                karbohidrat. Meski aslinya berasal dari Amerika Selatan, keberadaan sisa-sisa tanaman yang
                                diduga singkong di Gua Pawon memperlihatkan adanya kontak atau perpindahan teknologi
                                pertanian yang lebih kompleks. Temuan ini menunjukkan bahwa masyarakat sekitar Gua Pawon
                                telah mengembangkan pertanian dan memanfaatkan singkong sejak ribuan tahun yang lalu,
                                kemungkinan sekitar 4.000–2.000 tahun lalu.
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
                    <span>Pisang (Musa spp.)</span>
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
                                Pisang adalah tanaman tropis yang menghasilkan buah dengan nilai gizi tinggi. Bukti
                                arkeobotani dari sekitar Gua Pawon menunjukkan keberadaan sisa pisang yang menandakan bahwa
                                buah ini telah dibudidayakan atau dikonsumsi sejak zaman prasejarah. Dengan umur temuan yang
                                diperkirakan mencapai ribuan tahun, pisang menjadi salah satu komoditas penting yang
                                memperkuat hipotesis bahwa masyarakat Gua Pawon telah mengenal dan memanfaatkan tanaman buah
                                untuk kebutuhan nutrisi.
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
                    <span>Palawija</span>
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
                                Palawija adalah kelompok tanaman pangan selain padi, seperti jagung, kedelai, kacang tanah,
                                dan ubi. Penemuan sisa-sisa tanaman dari kelompok ini di sekitar Gua Pawon menandakan adanya
                                diversifikasi pertanian oleh masyarakat prasejarah. Tanaman-tanaman ini biasanya
                                dibudidayakan di lahan kering dan menunjukkan kemampuan adaptasi serta pengetahuan pertanian
                                yang cukup maju. Umur temuan ini juga tergolong kuno, memperlihatkan transisi masyarakat
                                dari berburu dan meramu menuju sistem pertanian menetap.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Fauna --}}
        <h3 class="text-2xl md:text-3xl font-bold text-center mb-6 text-white gap-36 pt-18">Fauna disekitar Gua</h3>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">

                {{-- content fauna 1 --}}
                <div onclick="openModalcontent5()"
                    class="relative w-full flex items-end justify-start bg-cover bg-center transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
                    style="height: 450px; background-image: url('{{Vite::asset('../resources/img/elang tikus.png')}}')">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <main class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-10 text-center">
                        <h3 class="text-2xl font-medium text-white">Elang Tikus</h3>
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
                                <h2 class="text-3xl font-bold">Elang tikus</h2>
                                <p class="text-gray-500 italic mb-4">(Elanus caeruleus)</p>
                                <p class="text-gray-700 mb-4">
                                    Elang tikus adalah burung pemangsa kecil dari keluarga Accipitridae yang sering
                                    ditemukan di daerah terbuka, termasuk padang rumput, lahan pertanian, dan kawasan
                                    berbatu seperti sekitar Gua Pawon. Burung ini memiliki bulu dominan putih dengan sayap
                                    berwarna abu-abu kehitaman, serta mata merah yang tajam.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">panjang</p>
                                        <p>30–38 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>200-300 g kg/m³</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>8-12 tahun</p>
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
                        <h3 class="text-2xl font-medium text-white">Alap - Alap</h3>
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
                                    Alap-alap adalah burung pemangsa dari keluarga Falconidae yang dikenal dengan kecepatan
                                    dan kemampuan berburu di udara. Burung ini sering ditemukan di kawasan berbatu seperti
                                    sekitar Gua Pawon, berburu mangsa seperti burung kecil, serangga, dan mamalia kecil.
                                    Alap-alap memiliki paruh tajam dan cakar kuat untuk menangkap serta mencabik mangsanya
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">panjang</p>
                                        <p>25 - 50 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>200 - 1500 g</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>7 - 15 tahun</p>
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
                        <h3 class="text-2xl font-medium text-white">Monyet ekor panjang</h3>
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
                                <h2 class="text-3xl font-bold">Monyet ekor panjang</h2>
                                <p class="text-gray-500 italic mb-4">(Macaca fascicularis)</p>
                                <p class="text-gray-700 mb-4">
                                    Monyet ekor panjang adalah primata yang sangat adaptif dan banyak ditemukan di berbagai
                                    habitat, termasuk hutan hujan, daerah pesisir, hingga lingkungan yang dekat dengan
                                    manusia, seperti sekitar Gua Pawon. Mereka dikenal karena ekornya yang panjang, yang
                                    sering lebih panjang dari tubuhnya sendiri, serta wajah yang ekspresif dengan bulu
                                    kecokelatan atau keabu-abuan.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">panjang</p>
                                        <p>40 - 60 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>3–7 kg</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>20–30 tahun</p>
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
                                <h2 class="text-3xl font-bold">tikus Hutan</h2>
                                <p class="text-gray-500 italic mb-4">(Rattus Tiomanicus)</p>
                                <p class="text-gray-700 mb-4">
                                    Tikus hutan adalah rodensia kecil yang hidup di berbagai ekosistem hutan, termasuk hutan
                                    hujan, hutan pegunungan, dan daerah karst seperti sekitar Gua Pawon. Mereka memiliki
                                    tubuh ramping, moncong runcing, dan telinga besar dengan bulu berwarna cokelat atau
                                    abu-abu yang membantu mereka berkamuflase di lingkungan alami.
                                </p>
                                <div class="grid grid-cols-3 gap-4 text-sm">
                                    <div>
                                        <p class="font-semibold">panjang</p>
                                        <p>10 - 20 cm</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Berat</p>
                                        <p>50 - 250 g</p>
                                    </div>
                                    <div>
                                        <p class="font-semibold">Umur</p>
                                        <p>1 - 3 tahun</p>
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
                    <span>Walet (Aerodramus fuciphagus)</span>
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
                                Burung walet adalah burung kecil dari keluarga Apodidae yang terkenal karena kemampuannya
                                menghasilkan sarang dari air liurnya, yang bernilai tinggi dalam industri kuliner dan
                                pengobatan tradisional. Burung ini memiliki tubuh ramping dengan panjang sekitar 11–12 cm,
                                berat sekitar 15 gram, dan sayap panjang berbentuk sabit yang memungkinkannya bermanuver
                                dengan cepat di udara.
                                Walet memiliki bulu berwarna hitam kecokelatan dengan sedikit kilap biru atau hijau, serta
                                ekor pendek bercabang. Mereka menghabiskan sebagian besar hidupnya di udara, berburu
                                serangga kecil seperti nyamuk dan lalat dengan teknik terbang yang lincah.
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
                    <span>Landak Jawa (Hystrix javanica)</span>
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
                                Landak Jawa merupakan hewan pengerat bertubuh besar yang dilengkapi dengan duri-duri tajam
                                sebagai mekanisme pertahanan diri. Mereka biasanya aktif pada malam hari dan bersembunyi di
                                balik bebatuan atau celah gua saat siang. Di sekitar Gua Pawon, keberadaan mereka
                                menunjukkan ekosistem yang masih mendukung kehidupan fauna darat. Panjang tubuhnya berkisar
                                antara 40–60 cm, dengan berat sekitar 5–10 kg, dan dapat hidup hingga 20 tahun.
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
                    <span>Kelelawar (Microchiroptera)</span>
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
                                Kelelawar dari subordo Microchiroptera banyak ditemukan bergelantungan di langit-langit gua
                                seperti Gua Pawon. Mereka berperan penting dalam menjaga keseimbangan ekosistem, terutama
                                sebagai pengendali serangga. Mengandalkan sistem ekolokasi, kelelawar ini dapat terbang
                                dalam gelap dengan sangat presisi. Umumnya memiliki panjang tubuh sekitar 4–10 cm, berat
                                5–50 gram, dan dapat hidup hingga 20 tahun tergantung spesiesnya.
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
                    <span> Musang Hutan (Paradoxurus hermaphroditus)</span>
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
                                Musang hutan atau luwak adalah mamalia nokturnal yang cerdas dan adaptif. Mereka sering
                                berkeliaran di sekitar gua dan hutan untuk mencari buah-buahan, serangga, dan hewan kecil.
                                Tubuh mereka lentur, dengan kemampuan memanjat yang sangat baik. Musang hutan biasanya
                                memiliki panjang tubuh 40–70 cm, berat 2–5 kg, dan usia hidup mencapai 15–20 tahun.
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
                    <span> Lipan (Chilopoda)</span>
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
                                Lipan adalah artropoda berbentuk pipih dan panjang, dengan banyak kaki yang membuatnya cepat
                                dan lincah. Ditemukan merayap di celah batu atau permukaan lembap gua, lipan merupakan
                                predator serangga kecil dan bahkan hewan lain yang lebih kecil darinya. Panjang tubuhnya
                                bervariasi antara 10–30 cm tergantung spesies, berat hanya beberapa gram, dan mereka bisa
                                hidup selama 5–6 tahun di alam.
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
                    <span> Laba-laba Gua (Troglobiont Spiders)</span>
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
                                Laba-laba ini merupakan spesies adaptif yang telah berevolusi untuk hidup dalam kegelapan
                                total gua. Mereka biasanya tidak memiliki pigmentasi dan penglihatan sangat minim,
                                mengandalkan getaran untuk berburu mangsa. Di Gua Pawon, keberadaannya mencerminkan
                                keseimbangan mikrosistem dalam gua. Ukuran tubuhnya sekitar 1–3 cm, berat sangat ringan
                                hanya beberapa miligram, dan umurnya berkisar 1–2 tahun.
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
                        Folklore
                    </h2>
                </div>
                <div class="w-full max-w-2xl">
                    <img src="{{ Vite::asset('resources/img/Folklore.png') }}" alt="Gua Pawon"
                        class="w-full h-100 object-cover object-center rounded" />
                </div>
            </div>

            <p class="text-gray-700 text-justify text-base">
                Salah satu legenda yang sering dihubungkan dengan gua ini adalah kisah Sangkuriang dan Dayang Sumbi,
                yang
                juga
                berkaitan
                dengan terbentuknya Gunung Tangkuban Perahu dan Danau Bandung Purba. Dalam legenda ini, Sangkuriang
                hampir
                berhasil
                menyelesaikan tantangan membendung sungai dan membuat perahu dalam semalam, tetapi Dayang Sumbi
                menggagalkan
                rencananya
                dengan mengelabui waktu fajar. Karena marah, Sangkuriang menendang perahu yang hampir selesai, yang
                kemudian
                menjadi
                Gunung Tangkuban Perahu. Gua Pawon sering disebut sebagai salah satu tempat yang berhubungan dengan
                kisah
                ini, di
                mana
                beberapa versi menyatakan bahwa gua ini pernah menjadi tempat pengasingan Dayang Sumbi sebelum ia
                menetap di
                tempat
                lain. Selain itu, keberadaan Gua Pawon di kawasan yang dahulu merupakan bagian dari Danau Bandung Purba
                juga
                memperkuat
                keterkaitannya dengan mitos Sangkuriang.
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

    @include('components.kotak_saran')
@endsection