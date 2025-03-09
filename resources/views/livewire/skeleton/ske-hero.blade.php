@props(['hero', 'section'])
<div class="w-full max-w-screen ">
    <div role="status" class=" animate-pulse">
        @if ($hero)
        <div class="relative w-full h-full">
            <div class=" h-[460px] bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 my-12 max-w-screen-xl mx-auto">
                <div class=" h-[360px] bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div>
                <div class="col-span-2 h-[360px] bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div>
            </div>
        </div>

        @elseif ($section)
            <div class="h-56 bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div>
            <div class="h-28 bg-gray-200 rounded-xl dark:bg-zinc-900 w-1/2 mb-8 mx-auto"></div>
        @endif
    </div>
</div>
