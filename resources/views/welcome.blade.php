<x-layouts.guest>

    <div
        class=" min-h-screen flex flex-col items-center justify-center selection:bg-[#03A56A] selection:text-white">
        <div class="relative w-full px-2 md:px-4">
            <main class="mt-6 py-12">
                <x-home.section>
                    <x-slot name="content">
                        <livewire:home.home-component :hero="$hero" />
                        <div class="py-12 px-4 w-full max-w-screen-2xl mx-auto text-center lg:py-16 relative">
                            <section class="mb-4 -mt-2">
                                <div
                                    class="border border-green-200/50 dark:border-gray-700/40 dark:border-b-0 mx-1 lg:mx-12 backdrop-blur-md rounded-[16px] p-4 md:p-8 mb-8">
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                                        <div
                                            class=" border border-gray-200 dark:border-gray-700 rounded-2xl p-6 md:p-6 dark:backdrop-blur-sm">
                                            <h2 class="text-xl text-gray-900 dark:text-white font-bold mb-2">
                                                Agenda Kota Padang</h2>
                                            <div class="flex items-center space-x-4 rtl:space-x-reverse mb-3">
                                                <div class="flex items-center">
                                                    <svg class="w-5 h-5 text-gray-400 me-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span
                                                        class="text-gray-900 dark:text-white text-base font-medium">30.06.2024</span>
                                                </div>
                                                <div class="flex items-center">
                                                    <svg class="w-5 h-5 text-gray-400 me-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span
                                                        class="text-gray-900 dark:text-white text-base font-medium">Padang,
                                                        Sumbar</span>
                                                </div>
                                            </div>
                                            <div class="flex items-start space-x-4 rtl:space-x-reverse mb-2 ">
                                                <div class="flex items-center">
                                                    <svg class="w-5 h-5 text-gray-400 me-2" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span
                                                        class="text-gray-900 dark:text-white text-base font-medium">Cuaca
                                                        Hari ini,</span>
                                                </div>
                                                <span
                                                    class="text-gray-900 dark:text-white text-base font-medium">Hujan,
                                                </span>
                                            </div>

                                            <div class="relative max-w-screen">
                                                <div class="inline-flex items-center justify-center w-full">
                                                    <hr
                                                        class="w-64 h-1 my-4 bg-gray-200 border-0 rounded-sm dark:bg-gray-700">
                                                    <div
                                                        class="absolute px-6 -translate-x-1/2 bg-white/50 left-1/2 dark:bg-gray-900">
                                                        Agenda
                                                    </div>
                                                </div>
                                                <ol
                                                    class="relative border-s border-gray-200 dark:border-gray-700">
                                                    <li class="mb-10 ms-6">
                                                        <span
                                                            class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                                                            <svg class="w-2.5 h-2.5 text-green-800 dark:text-green-300"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                            </svg>
                                                        </span>
                                                        <h3
                                                            class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                                            Rapat</h3>
                                                        <time
                                                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                                            on December 2nd, 2021</time>
                                                        <p
                                                            class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                            Get started with
                                                            dozens of web components and interactive elements
                                                            built on top of Tailwind CSS.
                                                        </p>
                                                    </li>
                                                    <li class="mb-10 ms-6">
                                                        <span
                                                            class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                                                            <svg class="w-2.5 h-2.5 text-green-800 dark:text-green-300"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                            </svg>
                                                        </span>
                                                        <h3
                                                            class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                                            Rapat</h3>
                                                        <time
                                                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                                            on December 2nd, 2021</time>
                                                        <p
                                                            class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                            Get started with
                                                            dozens of web components and interactive elements
                                                            built on top of Tailwind CSS.
                                                        </p>
                                                    </li>
                                                    <li class="mb-10 ms-6">
                                                        <span
                                                            class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                                                            <svg class="w-2.5 h-2.5 text-green-800 dark:text-green-300"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                            </svg>
                                                        </span>
                                                        <h3
                                                            class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                                            Rapat</h3>
                                                        <time
                                                            class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                                            on December 2nd, 2021</time>
                                                        <p
                                                            class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                            Get started with
                                                            dozens of web components and interactive elements
                                                            built on top of Tailwind CSS.
                                                        </p>
                                                    </li>
                                                </ol>
                                            </div>

                                        </div>

                                        <div
                                            class="md:col-span-2 border border-gray-200 dark:border-gray-700 rounded-2xl p-6 md:p-6 dark:backdrop-blur-sm">
                                            <h2
                                                class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">
                                                Start with
                                                laravel Design System</h2>
                                            <p
                                                class="text-base font-normal text-gray-500 dark:text-gray-400 mb-4">
                                                Static websites
                                                are now used to bootstrap lots of websites and are becoming the
                                                basis for a variety
                                                of tools that even influence both web designers and developers.
                                            </p>

                                             <x-carousel.section-caraousel/>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <livewire:home.home-component :section="$section" />
                        </div>
                    </x-slot>
                </x-home.section>

                <x-home.section>
                    <x-slot name="content">
                        <div class="py-2 mx-auto max-w-screen-md lg:py-6 ">
                            <h1
                                class="mb-4 text-5xl font-extrabold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                                <span
                                    class="text-transparent bg-clip-text bg-gradient-to-r to-green-400 from-gray-500">Find
                                    the best features for you</span>
                            </h1>
                            <p
                                class="mb-6 text-sm font-extrabold text-black dark:text-white md:text-lg lg:text-lg text-center">
                                Make your own choice, get your needs
                            </p>
                            <div class="grid md:grid-cols-1 gap-8 mb-0">
                                <div class="sm:hidden">
                                    <label for="tabs" class="sr-only">Select your country</label>
                                    <select id="tabs"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-green dark:focus:ring-green-500 dark:focus:border-green-500">
                                        <option>Students</option>
                                        <option>Office Worker</option>
                                        <option>Job Seeker</option>
                                        <option>Entrepreneur</option>
                                    </select>
                                </div>
                                <ul
                                    class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow-sm sm:flex dark:divide-gray-700 dark:text-gray-400">
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 text-gray-900 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-green-300 active focus:outline-none dark:bg-green-700/50 dark:text-white"
                                            aria-current="page">Students</a>
                                    </li>
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-green-300 focus:outline-none dark:hover:text-white  dark:bg-green-700/10 dark:hover:bg-green-700">Office
                                            Worker</a>
                                    </li>
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-green-300 focus:outline-none dark:hover:text-white dark:bg-green-700/10 dark:hover:bg-green-700">Entrepreneur</a>
                                    </li>
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-green-300 dark:hover:text-white dark:bg-green-700/10 dark:hover:bg-green-700">Entrepreneur</a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                        <div class="py-2 mx-auto max-w-screen lg:py-8 ">
                            <div class="swiper cardSlider" data-xs="1" data-lg="4">
                                <div class="swiper-wrapper">
                                    @for ($i = 0; $i < 5; $i++)
                                        <div class="swiper-slide">
                                            <div
                                                class=" border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 dark:backdrop-blur-sm">

                                                <a href="#"
                                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                                    </svg>
                                                    Design
                                                </a>
                                                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">
                                                    Start with
                                                    laravel Design System</h2>
                                                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">
                                                    Static
                                                    websites
                                                    are now used to bootstrap lots of websites and are becoming the
                                                    basis for a
                                                    variety
                                                    of tools that even influence both web designers and developers.</p>
                                                <a href="#"
                                                    class="text-green-600 dark:text-green-500 hover:underline font-medium text-lg inline-flex items-center">Read
                                                    more
                                                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </x-slot>
                </x-home.section>

            </main>
        </div>
    </div>
    </div>

    <!-- drawer init and toggle -->

    <x-modal-cari focusable name="test">
        <div class="p-4 w-full">
            <h5 id="drawer-top-label"
                class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                    class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>Caei</h5>
            <button x-on:click="$dispatch('close')" type="button" data-drawer-hide="drawer-top-example"
                aria-controls="drawer-top-example"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <form action="">

                <input type="text" id=""
                    class="text-center block w-full p-3 ps-10 text-sm text-gray-900 rounded-full bg-white  focus:ring-green-500 focus:border-green-500 dark:bg-lime-950/70 dark:placeholder-white dark:text-green-50 dark:focus:ring-green-100 ease-in-out dark:transition-colors"
                    placeholder="Apa yang anda Cari ..?" />
            </form>

            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg></a>
        </div>

    </x-modal-cari>

</x-layouts.guest>
