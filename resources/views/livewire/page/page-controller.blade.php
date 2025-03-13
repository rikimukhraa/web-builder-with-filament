<div>
    <x-page.section-page>
        <x-slot name="content">
            <div class="py-0 md:py-4 w-full max-w-screen-2xl mx-auto">
                <div class="relative dark:bg-black z-10 rounded-2xl h-14 w-40 mx-auto lg:-mb-10">

                </div>
                <div class="border border-gray-200 dark:border-zinc-900
                 p-0 md:p-2 mb-8 px-4 rounded">
                    <div id="controls-carousel" class="relative w-full" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="z-0 relative h-56 overflow-hidden rounded-lg md:h-96">
                            <!-- Item 1 -->
                            <div class="hidden rounded duration-700 ease-in-out" data-carousel-item>
                                <img src="https://res.cloudinary.com/dcl0dmpgl/image/upload/v1685523657/GreenState%20AG/Home%20Page/Hero%20Area/hero_area_second_background_lql1ru.webp"
                                    class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden rounded duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://res.cloudinary.com/dcl0dmpgl/image/upload/v1685523657/GreenState%20AG/Home%20Page/Hero%20Area/hero_area_second_background_lql1ru.webp"
                                    class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                            </div>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
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
            <div class="mx-auto w-full lg:max-w-screen-lg ">

            <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                <a href="https://laravel.com/docs" id="docs-card"
                    class="flex flex-col items-start gap-6 overflow-hidden rounded-[14px] backdrop-blur-sm bg-white/40 p-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05]
                            transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                            focus-visible:ring-[#03A56A] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-black dark:ring-zinc-800
                            dark:hover:text-white/70 hover:ring-green-500  dark:hover:ring-green-900 dark:focus-visible:ring-[#03A56A]">
                    <div id="screenshot-container"
                        class="relative flex items-stretch flex-1 w-full ">

                        <img src="https://wallpapercave.com/wp/wp6688632.jpg"
                            alt="Laravel documentation screenshot"
                            class="hidden aspect-video h-full w-full flex-1 rounded-[20px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block " />
                        <img src="https://s-media-cache-ak0.pinimg.com/736x/79/64/99/796499dbcfc72f3f4ee132a1bdae6d83.jpg"
                            alt="Laravel documentation screenshot"
                            class="block aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.20)] dark:hidden " />
                        <div
                            class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-green-100   dark:via-green-900 ">
                        </div>
                    </div>

                    <div class="relative flex items-center gap-6 lg:items-end ">
                        <div id="docs-card-content"
                            class="flex items-start gap-6 rounded-lg lg:flex-col">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#03A56A]/10 sm:size-16 ">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24">
                                    <path fill="#03A56A"
                                        d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z" />
                                    <path fill="#03A56A"
                                        d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z" />
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5 lg:pt-0 ">
                                <h2 class="text-xl font-semibold text-black dark:text-white">
                                    Documentation</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laravel has wonderful documentation covering every aspect of the
                                    framework.
                                    Whether you are a newcomer or have prior experience with
                                    Laravel, we
                                    recommend reading our documentation from beginning to end.
                                </p>
                            </div>
                        </div>

                        <svg class="size-6 shrink-0 stroke-[#03A56A]"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </div>
                </a>

                <a href="https://laracasts.com"
                    class="rounded-[14px] flex items-start gap-4 backdrop-blur-sm bg-white/40 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                            focus-visible:ring-[#03A56A] lg:pb-10 dark:bg-transparent dark:hover:bg-green-950 dark:hover:bg-opacity-20 dark:text-white dark:ring-zinc-800 dark:hover:text-white/70 hover:ring-green-500 dark:hover:ring-green-900 dark:focus-visible:ring-[#03A56A]">
                    <div
                        class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#03A56A]/10 sm:size-16">
                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <g fill="#03A56A">
                                <path
                                    d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
                            </g>
                        </svg>
                    </div>

                    <div class="pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                        <p class="mt-4 text-sm/relaxed">
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and
                            JavaScript
                            development. Check them out, see for yourself, and massively level up
                            your
                            development skills in the process.
                        </p>
                    </div>

                    <svg class="size-6 shrink-0 self-center stroke-[#03A56A]"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>

                <a href="https://laravel-news.com"
                    class="rounded-[14px] flex items-start gap-4 backdrop-blur-sm bg-white/30 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300
                            hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#03A56A] lg:pb-10 dark:bg-transparent hover:ring-green-500 dark:hover:bg-green-950 dark:hover:bg-opacity-20
                            dark:ring-zinc-800 dark:hover:text-white/70  dark:hover:ring-green-900 dark:focus-visible:ring-[#03A56A]">
                    <div
                        class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#03A56A]/10 sm:size-16">
                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <g fill="#03A56A">
                                <path
                                    d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z" />
                                <path
                                    d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z" />
                                <path
                                    d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z" />
                            </g>
                        </svg>
                    </div>

                    <div class="pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News
                        </h2>

                        <p class="mt-4 text-sm/relaxed">
                            Laravel News is a community driven portal and newsletter aggregating all
                            of the
                            latest and most important news in the Laravel ecosystem, including new
                            package
                            releases and tutorials.
                        </p>
                    </div>

                    <svg class="size-6 shrink-0 self-center stroke-[#03A56A]"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>


                <div
                    class="rounded-[14px] flex items-start gap-4 p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                        focus-visible:ring-[#03A56A] lg:pb-10 backdrop-blur-sm bg-white/30 dark:bg-transparent dark:hover:bg-green-950 dark:hover:bg-opacity-40 dark:ring-zinc-800 hover:ring-green-500 hover:bg-white dark:hover:text-white/70 dark:hover:ring-green-900 dark:focus-visible:ring-[#03A56A]">
                    <div
                        class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#03A56A]/10 sm:size-16">
                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <g fill="#03A56A">
                                <path
                                    d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z" />
                            </g>
                        </svg>
                    </div>

                    <div class="pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant
                            Ecosystem</h2>

                        <p class="mt-4 text-sm/relaxed">
                            Laravel's robust library of first-party tools and libraries, such as <a
                                href="https://forge.laravel.com"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white dark:focus-visible:ring-[#03A56A]">Forge</a>,
                            <a href="https://vapor.laravel.com"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Vapor</a>,
                            <a href="https://nova.laravel.com"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Nova</a>,
                            <a href="https://envoyer.io"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Envoyer</a>,
                            and <a href="https://herd.laravel.com"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Herd</a>
                            help you take your projects to the next level. Pair them with powerful
                            open source
                            libraries like <a href="https://laravel.com/docs/billing"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Cashier</a>,
                            <a href="https://laravel.com/docs/dusk"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Dusk</a>,
                            <a href="https://laravel.com/docs/broadcasting"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Echo</a>,
                            <a href="https://laravel.com/docs/horizon"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Horizon</a>,
                            <a href="https://laravel.com/docs/sanctum"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Sanctum</a>,
                            <a href="https://laravel.com/docs/telescope"
                                class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#03A56A] dark:hover:text-white">Telescope</a>,
                            and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </x-slot>
    </x-page.section-page>
</div>



