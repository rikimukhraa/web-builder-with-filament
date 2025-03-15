@props(['title' => '', 'data' => ''])
<div>
    <x-page.section-page>
        <x-slot name="content">
            <div class="py-0 md:py-4 w-full max-w-screen-2xl mx-auto ">

                <div
                    class="border w-full  border-gray-200/20 dark:border-zinc-900 rounded-[14px] p-0 md:p-2 mb-8 px-4">

                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
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

                    </div>
                </div>
            </div>

        </x-slot>
    </x-page.section-page>
</div>
