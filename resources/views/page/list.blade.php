<x-layouts.guest class="">
    <div class="py-0  text-black/50 dark:text-white/50">
        <div class="relative min-h-screen
        justify-center selection:bg-[#03A56A] selection:text-white">
            <div class="relative w-full px-6 ">
                <main class="py-12">
                    <livewire:list.list-controller :title="$title" :data="$data"/>
                </main>
            </div>
        </div>
    </div>

</x-layouts.guest>
