@props(['data'=>'', 'content'=> ''])
    <nav
        class="transition delay-100 duration-300 ease-in-out hover:bg-white/70 dark:hover:bg-black fixed z-30 w-full rounded-b-lg bg-gray-100/20 backdrop-blur-md border-b border-gray-200/10 dark:bg-black/50 dark:border-gray-900 py-3 px-5">
        <div class="px-2  flex flex-wrap items-center justify-between  mx-auto ">
           <x-inc.header-logo/>
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
                    <a href="/login"
                        class="flex text-sm bg-transparent rounded md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:hover:ring-1 dark:hover:ring-green-900 dark:hover:bg-transparent dark:hover:text-green-800"">
                        <svg class="w-6 h-6 text-green-800" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                        </svg>
                    </a>
                @endauth
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span
                            class="block text-sm text-gray-500 truncate dark:text-gray-400">name@laravel.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>

                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
           <x-inc.header-nav>
                <x-slot name="navbar" >
                    <x-inc.header-nav-li>
                        <x-slot name="navli">
                            @foreach ($data as $item)
                            <x-inc.header-nav-li-a
                                :navtitle="$item->name"
                                :rute="$item->slug">
                            </x-inc.header-nav-li-a>
                            @endforeach
                        </x-slot>
                    </x-inc.header-nav-li>
                </x-slot>
           </x-inc.header-nav>
        </div>



</nav>

