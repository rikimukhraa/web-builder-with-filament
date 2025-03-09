<x-layouts.guest>

    <div
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#03A56A] selection:text-white">
        <div class="relative w-full px-6">
            <main class="mt-6 py-12">
                <x-home.section>
                    <x-slot name="content">
                        <livewire:home.home-component :hero="$hero" />
                        <div class="py-12 px-4 w-full max-w-screen-2xl mx-auto text-center lg:py-16 relative">
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
                            <div class="grid md:grid-cols-4 gap-8 mb-8">
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
                                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Start with
                                        laravel Design System</h2>
                                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static
                                        websites
                                        are now used to bootstrap lots of websites and are becoming the basis for a
                                        variety
                                        of tools that even influence both web designers and developers.</p>
                                    <a href="#"
                                        class="text-green-600 dark:text-green-500 hover:underline font-medium text-lg inline-flex items-center">Read
                                        more
                                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                                <div
                                    class=" border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 dark:backdrop-blur-sm">
                                    <a href="#"
                                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                                        </svg>
                                        Code
                                    </a>
                                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Best laravel
                                        libraries around the web</h2>
                                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static
                                        websites
                                        are now used to bootstrap lots of websites and are becoming the basis for a
                                        variety
                                        of tools that even influence both web designers and developers.</p>
                                    <a href="#"
                                        class="text-green-600 dark:text-green-500 hover:underline font-medium text-lg inline-flex items-center">Read
                                        more
                                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                                <div
                                    class=" border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 dark:backdrop-blur-sm">
                                    <a href="#"
                                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                                        </svg>
                                        Code
                                    </a>
                                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Best laravel
                                        libraries around the web</h2>
                                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static
                                        websites
                                        are now used to bootstrap lots of websites and are becoming the basis for a
                                        variety
                                        of tools that even influence both web designers and developers.</p>
                                    <a href="#"
                                        class="text-green-600 dark:text-green-500 hover:underline font-medium text-lg inline-flex items-center">Read
                                        more
                                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                                <div
                                    class=" border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 dark:backdrop-blur-sm">
                                    <a href="#"
                                        class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                                        </svg>
                                        Code
                                    </a>
                                    <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Best laravel
                                        libraries around the web</h2>
                                    <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static
                                        websites
                                        are now used to bootstrap lots of websites and are becoming the basis for a
                                        variety
                                        of tools that even influence both web designers and developers.</p>
                                    <a href="#"
                                        class="text-green-600 dark:text-green-500 hover:underline font-medium text-lg inline-flex items-center">Read
                                        more
                                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                        {{-- <section class="w-full py-12 mt-12  text-black/50  dark:text-white/50">

                        </section> --}}
                    </x-slot>
                </x-home.section>

            </main>
        </div>
    </div>
    </div>
</x-layouts.guest>
