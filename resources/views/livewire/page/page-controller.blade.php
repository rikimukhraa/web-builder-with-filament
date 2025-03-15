@props(['title' => '', 'data' => ''])
<div>
    <x-page.section-page>
        <x-slot name="content">
            <div class="py-0 md:py-4 w-full max-w-screen-2xl mx-auto">
                <div class="relative bg-white dark:bg-black z-10 rounded-b-md h-6 w-60 mx-auto lg:-mb-4">
                </div>
                <div
                    class="flex justify-center items-center border bg-green-800 w-full h-52 border-gray-200/20 dark:border-zinc-900 rounded-[14px] p-0 md:p-2 mb-8 px-4">
                    <div class="">
                        <h1
                            class="mb-4 text-5xl font-extrabold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-gray-300 from-gray-50">{{ $title }}</span>
                        </h1>
                        <p
                            class="mb-2 text-sm font-extrabold text-white dark:text-white md:text-lg lg:text-lg text-center">
                            {{ $title }} Kota Padang</span>
                        </p>
                        {{-- @dd($data['content'][1]['data']) --}}
                    </div>
                    {{-- <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="z-0 relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden rounded duration-700 ease-in-out" data-carousel-item>
                                <img src="https://i.pinimg.com/736x/79/64/99/796499dbcfc72f3f4ee132a1bdae6d83.jpg" loading="lazy"
                                    class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden rounded duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://i.pinimg.com/736x/79/64/99/796499dbcfc72f3f4ee132a1bdae6d83.jpg"
                                    class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" loading="lazy"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider controls -->
                     <div class="flex justify-center space-x-1 py-4">
                        <button type="button"
                            class="relative top-0 start-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-green dark:text-gray-800 rtl:rotate-180"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="relative top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/10 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-green dark:text-gray-800 rtl:rotate-180"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                     </div>

                    </div> --}}
                </div>
            </div>
            <div class="mx-auto w-full lg:max-w-screen-lg ">

                {{-- <div class="md:flex">
                    <ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
                        <li>
                            <a href="#" class="inline-flex items-center px-4 py-3 text-white bg-green-700 rounded-lg active w-full dark:bg-green-600" aria-current="page">
                                <svg class="w-4 h-4 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                </svg>
                                Profile
                            </a>
                        </li>

                        <li>
                            <a class="inline-flex items-center px-4 py-3 text-gray-400 rounded-lg cursor-not-allowed bg-gray-50 w-full dark:bg-gray-800 dark:text-gray-500">
                                <svg class="w-4 h-4 me-2 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                                </svg>
                            Disabled</a>
                        </li>
                    </ul>
                    <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Profile Tab</h3>
                        <p class="mb-2">This is some placeholder content the Profile tab's associated content, clicking another tab will toggle the visibility of this one for the next.</p>
                        <p>The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div> --}}


                <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">
                    <div href="https://laravel.com/docs" id="docs-card"
                        class="flex flex-col items-start gap-6 overflow-hidden rounded-[14px] backdrop-blur-sm bg-white/40 p-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.04)] ring-1 ring-white/[0.05]
                            transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                            focus-visible:ring-[#03A56A] md:row-span-3 lg:p-6 dark:bg-black dark:ring-zinc-800
                            dark:hover:text-white/70 hover:ring-green-500  dark:hover:ring-green-900 dark:focus-visible:ring-[#03A56A]">

                        <div class="relative grid grid-cols-3 items-center gap-6 ">
                            <div class="col-span-2 rounded-lg ">
                                <div id="screenshot-container" class="relative flex items-stretch flex-1 w-full ">
                                    <img src="https://wallpapercave.com/wp/wp6688632.jpg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[20px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block " />
                                    <img src="https://s-media-cache-ak0.pinimg.com/736x/79/64/99/796499dbcfc72f3f4ee132a1bdae6d83.jpg"
                                        alt="Laravel documentation screenshot"
                                        class="block aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.20)] dark:hidden " />

                                </div>
                            </div>
                            <div class=" rounded-lg">
                                <div class="pt-3 sm:pt-5 lg:pt-0 ">
                                    <h1 class="text-xl md:text-5xl font-semibold text-black dark:text-white">
                                        {{ $data['content'][0]['data']['title'] ?? 'content' }}</span> </h1>
                                    <p class="mt-4 md:text-md">
                                        {!! $data['content'][1]['data']['content'] ?? 'content' !!}
                                    </p>
                                </div>
                                <div class="text-start md:text-end">
                                    <button type="button"
                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        Lihat semua
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div
                        class="md:max-w-screen-lg mx-auto rounded-xl  p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.03)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                    focus-visible:ring-[#03A56A] lg:pb-10 backdrop-blur-sm bg-white/30 dark:bg-transparent dark:hover:bg-green-950 dark:hover:bg-opacity-40 dark:ring-zinc-800 hover:ring-green-500 hover:bg-white dark:hover:text-white/70 dark:hover:ring-green-900 dark:focus-visible:ring-[#03A56A]">
                        <div class="relative grid grid-cols-3 items-center justify-center gap-6">
                            <div class=" rounded-lg ">
                                <h1 class="text-xl md:text-4xl font-semibold text-black dark:text-white">
                                    {{ $data['content'][2]['data']['title'] ?? 'content' }}
                                </h1>
                            </div>
                            <div class="col-span-2 flex flex-col items-end rounded-lg  ">
                                <h2 class="text-xl font-semibold text-black dark:text-white">
                                    {{ $data['content'][2]['data']['title'] ?? 'content' }} </h2>
                                <p class="mt-4 text-sm/relaxed">
                                    {!! $data['content'][3]['data']['content'] ?? 'content' !!}
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <button type="button"
                                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Lihat semua
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </button>
                        </div>

                    </div>
                    <div class="mt-4">
                        <h1
                            class="mb-4 text-2xl font-extrabold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r to-zinc-800 from-gray-600">Program
                                Unggulan</span>
                        </h1>
                        <p
                            class="mb-0 text-sm font-extrabold text-green-800 dark:text-white md:text-lg lg:text-lg text-center">
                            {{ $title }} Kota Padang</span>
                        </p>
                        {{-- @dd($data['content'][1]['data']) --}}
                    </div>
                    <div class="border py-2 md:py-6 mx-auto max-w-screen p-6 lg:p-4  ">
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-6 mb-1">
                            <div
                                class=" border border-gray-200 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">
                                <a href="#"
                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path
                                            d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                    </svg>
                                    Design
                                </a>
                                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                                    laravel Design System</h2>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                    websites
                                    of tools that even influence both web designers and developers.</p>

                            </div>
                            <div
                                class=" border border-gray-200 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">
                                <a href="#"
                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path
                                            d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                    </svg>
                                    Design
                                </a>
                                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                                    laravel Design System</h2>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                    websites
                                    of tools that even influence both web designers and developers.</p>

                            </div>
                            <div
                                class=" border border-gray-200 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">
                                <a href="#"
                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path
                                            d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                    </svg>
                                    Design
                                </a>
                                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                                    laravel Design System</h2>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                    websites
                                    of tools that even influence both web designers and developers.</p>

                            </div>
                            <div
                                class=" border border-gray-200 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">
                                <a href="#"
                                    class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path
                                            d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                    </svg>
                                    Design
                                </a>
                                <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                                    laravel Design System</h2>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                    websites
                                    of tools that even influence both web designers and developers.</p>

                            </div>
                            <div
                            class=" border border-gray-200 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">
                            <a href="#"
                                class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path
                                        d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                </svg>
                                Design
                            </a>
                            <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                                laravel Design System</h2>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                websites
                                of tools that even influence both web designers and developers.</p>

                        </div>

                        </div>

                    </div>

                    <div class="border py-2 md:py-6 mx-auto max-w-screen p-6 lg:p-4  ">
                        <div class="grid  md:grid-cols-4 gap-6 mb-1">
                            <div
                                class="border border-gray-200 bg-green-800 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">

                                <h2 class="text-gray-200 dark:text-white text-xl font-extrabold mb-2">Kontribusi
                                   Padang
                                    Terhadap Negara </h2>
                                <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Static
                                   </p>
                                   <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Static
                                </p>
                                <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Static
                                </p>
                                <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Static
                                </p>

                            </div>
                            <div
                            class="col-span-3 border border-gray-200 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">

                            <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                                laravel Design System</h2>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                websites
                                of tools that even influence both web designers and developers.</p>

                        </div>
                        </div>
                    </div>


                </div>
            </div>
        </x-slot>
    </x-page.section-page>
</div>
