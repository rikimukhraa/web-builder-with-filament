@props(['hero','section'])
<div>
    @if ($hero)
    <div class="py-0  text-black/50 dark:text-white/50">
        <div class="p-0">
            <section class="rounded-t-3xl bg-center bg-cover
                bg-[url('https://upload.wikimedia.org/wikipedia/commons/b/be/Balai_kota_Padang_tempo_doeloe.jpg')] bg-green-50 bg-blend-multiply
                dark:bg-[url('https://padang.go.id/assets/frontend/img/bg/balaikota.webp')] h-[700px]
                 dark:bg-green-950/60 dark:bg-blend-multiply">
                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-36 ">
                    <div class="mt-10 lg:mt-16 mx-auto py-6 lg:py-8">
                        <img class="w-12 h-12 mx-auto mb-2 hover:animate-bounce opacity-60 "
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Logo_Padang.svg/1782px-Logo_Padang.svg.png"
                            alt="">
                        <p
                            class="mb-2 text-lg font-normal text-gray-100 lg:text-md sm:px-16 xl:px-48 dark:text-gray-400">
                            Portal resmi kota padang</p>
                        <h1
                            class="w-10/12 mx-auto mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl
                        lg:text-7xl mt-2
                        lg:mt-2">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r to-green-50 from-lime-50">
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
                                <input type="text" id=""
                                    class="text-center block w-full p-3 ps-10 text-sm text-gray-900 rounded-full
                                     bg-white  focus:ring-green-500 focus:border-green-500 dark:bg-lime-950/70
                                   dark:placeholder-white dark:text-green-50 dark:focus:ring-green-100 ease-in-out dark:transition-colors"
                                    placeholder="Apa yang anda Cari ..?" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-0">
            <div class="py-11 md:py-12 sm:py-12 lg:py-14">
                <div class="-mt-16 lg:-mt-28 md:-mt-24 sm:-mt-20 z-30 dark:hidden">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                        <path fill="white" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                    </svg>
                </div>
                <div class="-mt-16 lg:-mt-28 md:-mt-24 sm:-mt-20 z-30 dark:block hidden">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                        <path fill="" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                    </svg>
                </div>
            </div>
            <div class="border border-b-4 border-t-0 border-green-100 dark:border-gray-700 rounded-xl p-4 lg:p-10 bg-white dark:backdrop-blur-sm dark:bg-transparent
                mb-12 mx-auto max-w-screen-lg -m-1">

            </div>
        </section>

        <section class="mb-4 -mt-2">
            <div class="border border-green-200/50 dark:border-gray-700/40 dark:border-b-0 lg:mx-12 backdrop-blur-md rounded-[16px] p-4 md:p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div class=" border border-gray-200 dark:border-gray-700 rounded-2xl p-2 md:p-6 dark:backdrop-blur-sm">
                        <h2 class="text-xl text-gray-900 dark:text-white font-bold mb-2">Agenda Kota Padang</h2>
                        <div class="flex items-center space-x-4 rtl:space-x-reverse mb-3">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-400 me-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-900 dark:text-white text-base font-medium">30.06.2024</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-400 me-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-900 dark:text-white text-base font-medium">Padang, Sumbar</span>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 rtl:space-x-reverse mb-2 ">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-400 me-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-900 dark:text-white text-base font-medium">Cuaca Hari ini,</span>
                            </div>
                            <span class="text-gray-900 dark:text-white text-base font-medium">Hujan, </span>
                        </div>

                        <div class="relative max-w-screen">
                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-64 h-1 my-4 bg-gray-200 border-0 rounded-sm dark:bg-gray-700">
                                <div class="absolute px-4 -translate-x-1/2 bg-white/50 left-1/2 dark:bg-gray-900">
                                    Agenda
                                </div>
                            </div>
                            <ol class="relative border-s border-gray-200 dark:border-gray-700">
                                <li class="mb-10 ms-6">
                                    <span
                                        class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                                        <svg class="w-2.5 h-2.5 text-green-800 dark:text-green-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                    <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Rapat</h3>
                                    <time
                                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                        on December 2nd, 2021</time>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with
                                        dozens of web components and interactive elements built on top of Tailwind CSS.
                                    </p>
                                </li>
                                <li class="mb-10 ms-6">
                                    <span
                                        class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                                        <svg class="w-2.5 h-2.5 text-green-800 dark:text-green-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                    <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Rapat</h3>
                                    <time
                                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                        on December 2nd, 2021</time>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with
                                        dozens of web components and interactive elements built on top of Tailwind CSS.
                                    </p>
                                </li>
                                <li class="mb-10 ms-6">
                                    <span
                                        class="absolute flex items-center justify-center w-6 h-6 bg-green-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-green-900">
                                        <svg class="w-2.5 h-2.5 text-green-800 dark:text-green-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </span>
                                    <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Rapat</h3>
                                    <time
                                        class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                        on December 2nd, 2021</time>
                                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with
                                        dozens of web components and interactive elements built on top of Tailwind CSS.
                                    </p>
                                </li>
                            </ol>
                        </div>

                    </div>
                    <div class="md:col-span-2 border border-gray-200 dark:border-gray-700 rounded-2xl p-2 md:p-6 dark:backdrop-blur-sm">
                        <h2 class="text-gray-900 dark:text-white text-xl font-extrabold mb-2">Start with
                            laravel Design System</h2>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400 mb-4">Static websites
                            are now used to bootstrap lots of websites and are becoming the basis for a variety
                            of tools that even influence both web designers and developers.</p>
                        {{-- slide --}}
                        <div
                            class="w-full max-w-md  border border-gray-200 rounded-lg shadow-sm dark:bg-green-800/10
                                dark:border-green-700/30">
                            <a href="#"
                                class="flex flex-col items-center  border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-96 md:w-full-1/2 md:rounded-none md:rounded-t-lg"
                                    src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp" alt="">
                            </a>
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <a href="#"
                                    class=" text-green-800 text-xs w-fit font-medium inline-flex items-center
                                        px-2.5 py-0.5 rounded-md dark:bg-zinc-900 dark:text-green-400 mb-2">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path
                                            d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                    </svg>
                                    Design
                                </a>
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Noteworthy technology acquisitions 2021</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                                </p>
                                <a href="#"
                                    class="text-green-600 dark:text-green-500 hover:underline font-medium text-sm inline-flex items-center justify-end">Read
                                    more
                                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- <div class="justify-betweem text-green-600 dark:text-green-200">
        <svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg"
            class="w-20 h-20 mx-auto mb-8 " fill="green">
            <path
                d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z" />
        </svg>
    </div>
    <div class="">
        <h1 class="mb-4 text-3xl mx-12 py-4 font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-gray-400">
                {{  $hero['value'][0]['data']['desc'] ?? 'CSIRT-PAdang' }}
            </span>
        </h1>
        <a href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-green-700 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300 hover:bg-green-200 dark:hover:bg-green-800">
            <span class="text-xs bg-green-600 rounded-full
            text-white px-4 py-1.5 me-3">iOS</span>
            <span class="text-sm font-medium">Download now.</span>
            <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
        </a>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200"> {{  $hero['value'][1]['data']['desc'] ?? 'CSIRT-PAdang' }}</p>

    </div>
    <form class="w-full max-w-md mx-auto ">
        <label for="default-email"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Email
            sign-up</label>
        <div class="relative">
            <div
                class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                    <path
                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                    <path
                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                </svg>
            </div>
            <input type="text" id=""
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-green-500 focus:border-green-500 dark:bg-transparent dark:border-gray-700 dark:placeholder-greeb-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                placeholder="Enter here..." />
            <button type="submit"
                class="text-white absolute end-2.5 bottom-2.5 bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Test
                send</button>

        </div>
    </form> --}}
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
            <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
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
