@props(['data' => '', 'content' => ''])
<nav
    class="transition delay-100 duration-300 ease-in-out hover:bg-white/70 dark:hover:bg-black fixed z-30 w-full rounded-b-lg bg-gray-100/20 backdrop-blur-md border-b border-gray-200/10 dark:bg-black/50 dark:border-gray-900 py-3 px-5">
    <div class="px-2 flex flex-wrap items-center justify-between mx-auto ">
        <x-inc.header-logo />
        <div class="flex items-center space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
            <button id="theme-toggle" class="px-4 py-2 ">
                <svg class="w-6 h-6 text-green-800 dark:text-green-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
            </button>
            @auth
                <a href="/dashboard" wire:navigate
                    class="flex text-sm bg-transparent rounded md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:hover:ring-1 dark:hover:ring-green-900 dark:hover:bg-transparent dark:hover:text-green-800">
                    <svg class="text-green-800 w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </a>
            @else
                {{-- <a href="app/login"
                    class="flex text-sm bg-transparent rounded md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:hover:ring-1 dark:hover:ring-green-900 dark:hover:bg-transparent dark:hover:text-green-800"">
                    <svg class="w-6 h-6 text-green-800" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M7 12h14l-3 -3m0 6l3 -3" />
                    </svg>

                </a>
                <span
                    class="border border-l-0 rounded-md border-green-800/70 text-green-800 dark:text-green-400 dark:border-green-900/60 px-2">
                    Masuk
                </span> --}}
            @endauth
            <button id="menu-btn" class="md:hidden text-lg dark:text-white focus:outline-none">☰</button>
        </div>
        <x-inc.header-nav>
            <x-slot name="navbar">
                <x-inc.header-nav-li>
                    <x-slot name="navli">
                        @foreach ($data as $item)
                            <x-inc.header-nav-li-a :navtitle="$item->name" :child="$item" :rute="$item->slug">
                            </x-inc.header-nav-li-a>
                        @endforeach
                    </x-slot>
                </x-inc.header-nav-li>
            </x-slot>
        </x-inc.header-nav>

        <div id="mobile-menu"
            class="absolute z-40 inset-0  bg-white dark:bg-black -translate-y-96 md:hidden  items-center justify-items-start text-xl ">
            <div class="flex flex-row justify-between mx-auto p-3">
                <span class="text-3xl text-black dark:text-white ">{{ config('app.name', 'Laravel') }}</span>
                <button id="close-btn" class=" text-lg text-black dark:text-white float-end mx-2">&times;</button>
            </div>
            <div class=" bg-white dark:bg-black mx-auto py-12 px-4 rounded-bl-3xl">
                <ul class="space-y-4 ">
                    @foreach ($data as $item)
                    <li class=" group">
                        <a href="{{ $item->slug }}" class="hover:text-gray-500 dark:text-gray-100">{{ $item->name }}</a>
                        {{-- <div
                            class="dropdown-content absolute right-0 top-10  justify-end w-1/2  bg-white/80 dark:bg-green-900/40 dark:backdrop-blur-md  rounded-md ">
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-green-700/20">
                                <span class="text-sm text-green-950 font-bold dark:text-gray-400">Connect with
                                    third-party tools that you're already using.</span>
                            </a>

                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-green-700/20">
                                <span class="text-sm text-green-950 font-bold dark:text-gray-400">Connect with
                                    third-party tools that you're already using.</span>
                            </a>
                            <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-green-700/20">
                                <span class="text-sm text-green-950 font-bold dark:text-gray-400">Connect with
                                    third-party tools that you're already using.</span>
                            </a>
                        </div> --}}
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
</nav>
