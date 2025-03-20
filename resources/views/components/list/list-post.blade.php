@props(['data' => '', 'limit' => '', 'title' => null, 'class' => '','link' => null,'class' => 'col-span-1'])
@php
$image = $data->content[1]['data']['image'] ?? [];

@endphp


<article class="max-w-sm mx-auto {{ $class }}">
    <a href="{{ route('post.detail', $data->slug) }}">
        @forelse ($image as $img)
        <img src="{{ url('storage/' . $img ?? '') }}"
        class="mb-5 rounded-lg" loading="lazy">
        @break
        @empty
        <img src="https://www.thewall360.com/uploadImages/ExtImages/images1/def-638240706028967470.jpg"
        class="mb-5 rounded-lg" loading="lazy">
        @endforelse
    </a>
    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
        <a href="{{ route('post.detail', $data->slug) }}">
            {{ Str::limit($data->title ?? '', 48, preserveWords: true) }}
        </a>
    </h2>
    <p class="mb-4 text-gray-500 dark:text-gray-400">
        {{ Str::limit($data->title ?? '', 120, preserveWords: true) }}</p>
        <span>
            {{$data->created_at->locale('id')->diffForHumans()}} |
        </span>
    <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
        {{ $data->categori->name }}
    </a>
</article>
