@props(['title' => '', 'data' => ''])
<div>
    <x-page.section-page>
        <x-slot name="content">

            <div class="mx-auto w-full lg:max-w-screen-lg ">
                @if ($data->slug === 'tentang-kota-padang')


                <div class="md:flex">
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
                            <a href="#" class="inline-flex items-center px-4 py-3 text-white bg-green-700 rounded-lg active w-full dark:bg-green-600" aria-current="page">
                                <svg class="w-4 h-4 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                </svg>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center px-4 py-3 text-white bg-green-700 rounded-lg active w-full dark:bg-green-600" aria-current="page">
                                <svg class="w-4 h-4 me-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                </svg>
                                Profile
                            </a>
                        </li>
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
                </div>
                @elseif ($data->slug === 'faq')
                    <h1 class="mb-4 text-5xl font-extrabold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-green-900 from-green-950">Pertanyaan sering di ajukan</span>
                    </h1>
                <div x-data="{ selectedAccordionItem: null }" class="w-full divide-y divide-outline overflow-hidden rounded-lg border border-green-200 text-zinc-800 dark:divide-green-800/30 dark:border-green-950/30 dark:backdrop-blur-md dark:text-on-surface-dark">
                    @foreach ($data['content'] as $key => $item)
                        <div>
                            @if ($item['type'] === 'heading')
                                <button id="controlsAccordionItem{{ $key }}" type="button"
                                    class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                                    aria-controls="accordionItem{{ $key }}"
                                    x-on:click="selectedAccordionItem = selectedAccordionItem === '{{ $key }}' ? null : '{{ $key }}'"
                                    x-bind:class="selectedAccordionItem === '{{ $key }}' ? 'text-green-700 dark:text-on-surface-dark-strong font-bold' : 'text-on-surface dark:text-on-surface-dark font-medium'"
                                    x-bind:aria-expanded="selectedAccordionItem === '{{ $key }}' ? 'true' : 'false'">
                                    {{ $item['data']['title'] }}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition"
                                        aria-hidden="true" x-bind:class="selectedAccordionItem === '{{ $key }}' ? 'rotate-180' : ''">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                            @elseif ($item['type'] === 'paragraph')
                                <div x-cloak x-show="selectedAccordionItem === '{{ $key - 1 }}'" id="accordionItem{{ $key }}" role="region"
                                    aria-labelledby="controlsAccordionItem{{ $key }}" x-collapse>
                                    <div class="p-4 text-sm sm:text-base text-pretty">
                                        {!! $item['data']['content'] ?? '' !!}
                                        {{-- <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">documentation</a>
                                        for additional information. --}}
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>

                @else
                <div class="grid gap-6 lg:grid-cols-1  lg:gap-8">
                    <div href="https://laravel.com/docs" id="docs-card"
                        class="flex flex-col items-start gap-6 overflow-hidden rounded-[14px] backdrop-blur-sm bg-white/40 p-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.04)] ring-1 ring-white/[0.05]
                            transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                            focus-visible:ring-[#03A56A] md:row-span-3 lg:p-6 dark:bg-black dark:ring-zinc-800
                            dark:hover:text-white/70 hover:ring-green-500  dark:hover:ring-green-900 dark:focus-visible:ring-[#03A56A]">

                        <div class="relative grid grid-cols-3 items-center gap-6 ">
                            <div class="col-span-3 lg:col-span-2 rounded-lg ">
                                <div id="screenshot-container" class="relative flex items-stretch flex-1 w-full ">
                                    <img src="https://wallpapercave.com/wp/wp6688632.jpg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[20px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block " />
                                    <img src="https://s-media-cache-ak0.pinimg.com/736x/79/64/99/796499dbcfc72f3f4ee132a1bdae6d83.jpg"
                                        alt="Laravel documentation screenshot"
                                        class="block aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.20)] dark:hidden " />

                                </div>
                            </div>
                            <div class="col-span-3 lg:col-span-1 rounded-lg">
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
                            <div class="hidden lg:block rounded-lg ">
                                <h1 class="text-xl md:text-4xl font-semibold text-black dark:text-white">
                                    {{ $data['content'][2]['data']['title'] ?? 'content' }}
                                </h1>
                            </div>
                            <div class="col-span-3 lg:col-span-2 flex flex-col items-end rounded-lg  ">
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
                                class="col-span-3 lg:col-span-1 border border-gray-200 bg-green-800 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">

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
                            class="col-span-3 lg:col-span-2 border border-gray-200 dark:border-gray-700 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">

                            <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                                laravel Design System</h2>
                            <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                websites
                                of tools that even influence both web designers and developers.</p>

                        </div>
                        </div>
                    </div>


                </div>
                @endif


            </div>
        </x-slot>
    </x-page.section-page>
</div>
