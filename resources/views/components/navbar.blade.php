<nav class="z-10 backdrop-blur-md border-b border-gray-100 lg:fixed w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/Asset 11.png') }}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-[8A8A8A]">Gua Pawon</span>
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-multi-level" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row ">
                <li>
                    <button type="button" data-dropdown-toggle="language-dropdown-menu"
                        class="text-[8A8A8A] flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        IDN
                    </button>
                    <!-- Dropdown menu -->
                    <div id="language-dropdown-menu"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white inline-flex text-[8A8A8A]">
                                    <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 3900 3900">
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
                                    EN (US)</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"
                        class="text-[8A8A8A] block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
                <li>
                    <a href="#" type="button" data-drawer-target="drawer-right-example"
                        data-drawer-show="drawer-right-example" data-drawer-placement="right"
                        aria-controls="drawer-right-example"
                        class="inline-flex gap-2 block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Menu
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </a>
                </li>
                <div id="drawer-right-example"
                    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray"
                    tabindex="-1" aria-labelledby="drawer-right-label">
                    <button type="button" data-drawer-hide="drawer-right-example" aria-controls="drawer-right-example"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
            </ul>
        </div>
    </div>
</nav>