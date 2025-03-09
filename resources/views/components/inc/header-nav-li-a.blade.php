
@props(['navtitle'=>'','rute'=>'','active'=>'bg-green-700 text-white'])
@php
    $active = request()->routeIs($rute) ? 'bg-green-700 text-white' : '';
@endphp
<li>
    <a href="{{ url($rute) }}" class=" block px-3 py-2 text-white {{ $active }} rounded md:bg-transparent
    md:text-green-700 md:p-0 md:dark:text-green-500" aria-current="{{ $rute }}">{{ $navtitle }}</a>
</li>

