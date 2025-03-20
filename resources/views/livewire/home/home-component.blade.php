@props(['hero','section'])
<div wire:ignore>
    @if ($hero)
    <div class="py-0 text-black/50 dark:text-white/50">
        <div class="p-0">
        <section class="rounded-t-3xl bg-center bg-cover rounded-b-3xl
                bg-[url('https://upload.wikimedia.org/wikipedia/commons/b/be/Balai_kota_Padang_tempo_doeloe.jpg')] bg-green-50 bg-blend-multiply
                dark:bg-[url('https://padang.go.id/assets/frontend/img/bg/balaikota.webp')] h-fit min-h-fit
                 dark:bg-green-950/60 dark:bg-blend-multiply">


                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-20 ">
                    <div class="mt-6 lg:mt-10 mx-auto py-6 lg:py-8">
                        <img class="w-12 h-12 mx-auto mb-2 hover:animate-bounce opacity-80 "
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Logo_Padang.svg/1782px-Logo_Padang.svg.png"
                            alt="">
                        <p
                            class="mb-2 text-lg font-normal text-gray-100 lg:text-md sm:px-16 xl:px-48 dark:text-gray-400">
                            Portal resmi kota padang</p>
                        <h1
                            class="w-10/12 mx-auto mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl
                        lg:text-7xl mt-2
                        lg:mt-2">
                            <span class="text-transparent bg-clip-text bg-gradient-to-t to-green-300 from-lime-50">
                                Satujuan Untuk Kejayaan <br>Kota Padang
                            </span>
                        </h1>
                        <p class="text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">    {{  $hero['value'][0]['data']['desc'] ?? 'CSIRT-PAdang' }}</p>
                        <span class="text-sm font-extrabold text-white mb-8 ">Temukan informasi publik terkini dari Pemerintah
                            Kota Padang </span>
                    </div>

                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                        <form class="w-full max-w-md mx-auto ">
                            <div class="relative rounded-pill">
                                <div class="text-center">
                                    <x-btn.search-button class="py-2"
                                    x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'test')"
                                   >

                                </x-btn.search-button>
                                 </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-0">
            <div class="py-12 md:py-14 sm:py-12 lg:py-14 ">
                <div class="-mt-16 lg:-mt-28 md:-mt-24 sm:-mt-20 z-30 dark:hidden">
                    <svg class="border-b-8 border-white bg-clip-content w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                        <path fill="white" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                    </svg>
                </div>
                <div class="-mt-16 lg:-mt-28 md:-mt-24 sm:-mt-20 z-30 dark:block hidden">
                    <svg class="border-b-8 border-black/90 w-full rounded-b-xl" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                        <path fill="" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                    </svg>
                </div>
            </div>
            <div class="border border-b-4 border-t-0 border-green-100 dark:border-gray-700/20 rounded-xl p-4 lg:p-10 bg-white dark:backdrop-blur-sm dark:bg-transparent
                mb-12 mx-auto max-w-screen-lg -m-1">

            </div>
        </section>
    </div>

    @elseif ($section)
        <div class="border border-gray-200 dark:border-gray-700/40 dark:border-b-0 dark:backdrop-blur-md rounded-[14px] p-8 md:p-12 mb-8">
            <a href="#"
                class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 14">
                    <path
                        d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                </svg>
                Get Demo
            </a>

            <h1
                class="mb-4 text-3xl font-extrabold text-black dark:text-white md:text-2xl lg:text-4xl">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r to-gray-500 from-green-400">
                    {{ $section['value'][0]['data']['content'] ?? 'content' }}</span>
                   </span>
            </h1>
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400 py-2">
                {{ $section['value'][0]['data']['sub_content'] ?? 'sub_content' }}</span>
                .</p>

            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-8">Static websites are
                now used to bootstrap lots of websites and are becoming the basis for a variety of tools
                that even influence both web designers and developers.</p>
            <div class=" mx-auto w-fit p-4 text-center bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 dark:bg-green-900/20 dark:border-green-900/50  dark:border-t-0">
                <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Work fast from anywhere</h5>
                <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Stay up to date and move work forward with Flowbite on iOS & Android. Download the app today.</p>
                <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                    <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-zinc-900 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Download on the</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
                        </div>
                    </a>
                    <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-zinc-900 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg>
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Get in on</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    @endif

</div>
