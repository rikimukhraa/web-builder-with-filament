<div class="swiper cardSlider" data-xs="1" data-lg="2">
    <div class="swiper-wrapper">
        @for ($i = 0; $i < 5; $i++)
            <div class="swiper-slide">
                <div
                    class="w-full max-w-md  border border-gray-200 rounded-lg shadow-sm dark:bg-green-800/10 dark:border-green-700/30">
                    <a href="#"
                        class="flex flex-col items-center  border border-gray-200 rounded-xl shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-xl h-96 md:h-96 md:w-full-1/2 md:rounded-none md:rounded-t-lg"
                            src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                            alt="">
                    </a>
                    <div
                        class="flex flex-col justify-between p-4 leading-normal">
                        <a href="#"
                            class=" text-green-800 text-xs w-fit font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-zinc-900 dark:text-green-400 mb-2">
                            <svg class="w-2.5 h-2.5 me-1.5"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                            </svg>
                            Design
                        </a>
                        <h5
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Noteworthy technology acquisitions 2021
                        </h5>
                        <p
                            class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Here are the biggest
                            enterprise technology acquisitions of
                            2021 so far, in reverse chronological
                            order.
                        </p>
                        <a href="#"
                            class="text-green-600 dark:text-green-500 hover:underline font-medium text-sm inline-flex items-center justify-end">Read
                            more
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 14 10">
                                <path stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>