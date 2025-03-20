@props([
    'navtitle' => '',
    'child' => '',
    'rute' => '',
    'active' => request()->url() == url($rute) ? 'text-green-900 font-bold' : 'text-green-700 font-normal',
    'class' => 'grid-cols',
])
@php
    $class = count($child->children) >= 1 ? ($class = 'grid-cols-3') : 'grid-cols-1';
    $place = $child->type == 'place' ? ($place = true) : false;
@endphp
<li class=" group">
    <a @if (!$place || $rute == 'home') href="{{ url($rute) }}" @endif wire:navigate
        class=" block px-3 py-2 {{ $active }} rounded md:bg-transparent
     md:p-0 md:dark:text-green-500"
        aria-current="{{ $rute }}">{{ $navtitle }}</a>
    @if ($child->children->isNotEmpty() && $place)
        <div
            class="dropdown-content absolute left-0 right-0 justify-center mx-auto mt-6 w-full  max-w-screen-md  bg-white/60 dark:bg-black/80 backdrop-blur-md shadow-lg rounded-b-xl border border-t-0 border-zinc-700/50">
            <div class="grid px-4 gap-4 py-6 mx-auto text-gray-900 dark:text-white md:{{ $class }} md:px-6">
                @forelse ($child->children as $c)
                    <ul>
                        <li>
                            <a href="{{ url($c->slug) }}" wire:navigate
                                class="block p-3 rounded-lg hover:bg-gray-50/50 dark:hover:bg-green-700/20">
                                <div class="font-semibold capitalize">{{ $c->name }}</div>
                                <span
                                    class="text-sm text-green-950 font-normal dark:text-gray-400">{{ $c->icon }}</span>
                            </a>
                        </li>
                    </ul>
                @empty
                @endforelse
                <ul class="">
                    <div class="border border-dashed w-full p-4 bg-white/20 rounded-md">
                        <x-inc.header-logo/>
                    </div>
                </ul>
            </div>
        </div>
    @endif
</li>
