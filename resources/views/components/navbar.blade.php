<nav class="z-50 border-b bg-white lg:fixed w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ Vite::asset('resources/img/Logo-pawon.png') }}" class="h-8" alt="Logo Gua Pawon" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">Gua Pawon</span>
        </a>

        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Buka menu utama</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:mt-0 md:border-0 md:bg-white md:flex-row md:items-center md:space-x-8 rtl:space-x-reverse">
                <li class="relative">
                    <button type="button" data-dropdown-toggle="language-dropdown-menu"
                        class="text-gray-700 flex items-center justify-between w-full py-2 px-3 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                        IDN
                    </button>
                    <div id="language-dropdown-menu"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-md w-44">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 inline-flex items-center text-gray-700">
                                    <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3900 3900">
                                        <path fill="#b22234" d="M0 0h7410v3900H0z" />
                                        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0"
                                            stroke="#fff" stroke-width="300" />
                                        <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                                        <g fill="#fff">
                                            <g id="d">
                                                <g id="c">
                                                    <g id="e">
                                                        <g id="b">
                                                            <path id="a"
                                                                d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                                            <use xlink:href="#a" y="420" />
                                                            <use xlink:href="#a" y="840" />
                                                            <use xlink:href="#a" y="1260" />
                                                        </g>
                                                        <use xlink:href="#a" y="1680" />
                                                    </g>
                                                    <use xlink:href="#b" x="247" y="210" />
                                                </g>
                                                <use xlink:href="#c" x="494" />
                                            </g>
                                            <use xlink:href="#d" x="988" />
                                            <use xlink:href="#c" x="1976" />
                                            <use xlink:href="#e" x="2470" />
                                        </g>
                                    </svg>
                                    EN (US)
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#"
                        class="text-gray-700 block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Kontak</a>
                </li>
                
                <li>
                    <a href="#"
                        class="text-gray-700 block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Artikel</a>
                </li>

                <li>
                    <button type="button" data-drawer-target="drawer-right-example"
                        data-drawer-show="drawer-right-example" data-drawer-placement="right"
                        aria-controls="drawer-right-example"
                        class="inline-flex gap-2 items-center py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 text-gray-700">Menu
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="drawer-right-example"
    class="fixed top-0 right-0 z-60 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80"
    tabindex="-1" aria-labelledby="drawer-right-label">

    <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Tutup menu</span>
    </button>

    <div class="mt-10 space-y-6">
        <a href="/" class="border-b pb-2 flex justify-between items-center group hover:text-blue-700">
            <span class="text-lg font-medium group-hover:text-blue-700">Beranda</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-blue-700" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
        <a href="/history" class="border-b pb-2 flex justify-between items-center group hover:text-blue-700">
            <span class="text-lg font-medium group-hover:text-blue-700">Sejarah</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-blue-700" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
        <a href="/ecology" class="border-b pb-2 flex justify-between items-center group hover:text-blue-700">
            <span class="text-lg font-medium group-hover:text-blue-700">Ekologi & Geologi</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-blue-700" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
        <a href="/journal" class="border-b pb-2 flex justify-between items-center group hover:text-blue-700">
            <span class="text-lg font-medium group-hover:text-blue-700">Jurnal Penelitian</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-blue-700" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
        <a href="/articles" class="border-b pb-2 flex justify-between items-center group hover:text-blue-700">
            <span class="text-lg font-medium group-hover:text-blue-700">Artikel</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-blue-700" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
        <a href="/upaya-konservasi" class="border-b pb-2 flex justify-between items-center group hover:text-blue-700">
            <span class="text-lg font-medium group-hover:text-blue-700">Upaya Konservasi</span>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-blue-700" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>

    <div class="absolute bottom-6 left-0 right-0 flex justify-center">
        <div class="text-sm text-gray-600 font-medium flex items-center gap-1">
            <img src="{{ Vite::asset('resources/img/Logo-pawon.png') }}" alt="Logo Gua Pawon" class="h-4 w-4">
            Gua Pawon
        </div>
    </div>
</div>