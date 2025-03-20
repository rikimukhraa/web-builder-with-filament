@props(['title' => '', 'data' => ''])
<div>
    <x-page.section-page>
        <x-slot name="content">
            <div class="py-0 md:py-1 max-w-screen-xl  mx-auto ">
                <div
                    class="border  border-gray-200/20 dark:border-zinc-900 rounded-[14px] p-0 md:p-2 mb-8  mx-auto">

                    <aside aria-label="Related articles" class="px-4 py-8 lg:py-6 lg:px-12 bg-gray-50 dark:backdrop-blur-md dark:bg-transparent ">
                        <div class="justify-center ">
                            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">{{ Str::headline($title ?? '') }}</h2>
                            <div class="grid gap-12 grid-cols-1 lg:grid-cols-4">

                                <article class="lg:col-span-3 group grid  rounded-xl grid-cols-1 md:grid-cols-8 overflow-hidden border border-outline bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
                                    <!-- image -->
                                    <div class="col-span-3 overflow-hidden ">
                                        <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-4.webp" class="h-52 md:h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105" alt="a men wearing VR goggles" />
                                    </div>
                                    <!-- body -->
                                    <div class="flex flex-col justify-center p-6 col-span-5">
                                        <small class="mb-4 font-medium">Artificial Intelligence</small>
                                        <h3 class="text-balance text-xl font-bold text-on-surface-strong lg:text-2xl dark:text-on-surface-dark-strong" aria-describedby="articleDescription">AI-Powered VR Goggles Redefine Reality: Augmented Vision for Al</h3>
                                        <p id="articleDescription" class="my-4 max-w-lg text-pretty text-sm">
                                            Experience the next level of augmented reality with smart
                                            goggles integrating cutting-edge AI for seamless interaction
                                            with the world around you.
                                        </p>
                                        <a href="#" class="w-fit font-medium text-primary underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-primary-dark">
                                           Read full story
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" aria-hidden="true" class="inline size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                                <div class="lg:col-span-1 ">
                                    <x-tabs.tabs-button>
                                     <x-slot name="action">
                                         <button x-on:click="selectedTab = 'groups'" x-bind:aria-selected="selectedTab === 'groups'" x-bind:tabindex="selectedTab === 'groups' ? '0' : '-1'" x-bind:class="selectedTab === 'groups' ? 'font-bold text-primary border-b-2 border-primary dark:border-primary-dark dark:text-primary-dark' : 'text-on-surface font-medium dark:text-on-surface-dark dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-on-surface-strong'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelGroups" >Terbaru</button>
                                         <button x-on:click="selectedTab = 'likes'" x-bind:aria-selected="selectedTab === 'likes'" x-bind:tabindex="selectedTab === 'likes' ? '0' : '-1'" x-bind:class="selectedTab === 'likes' ? 'font-bold text-primary border-b-2 border-primary dark:border-primary-dark dark:text-primary-dark' : 'text-on-surface font-medium dark:text-on-surface-dark dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-on-surface-strong'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelLikes" >Populer</button>
                                     </x-slot>
                                     <x-slot name="content">
                                         <div x-cloak x-show="selectedTab === 'groups'" id="tabpanelGroups" role="tabpanel" aria-label="groups">
                                             @for($i = 0; $i < 5; $i++)
                                             <div class="mb-2 w-full max-w-2xl border-outline bg-surface-alt p-2 text-left dark:border-outline-dark dark:bg-surface-dark-alt rounded-lg border" >
                                                 <div class="flex items-start gap-2 text-on-surface-strong dark:text-on-surface-dark-strong">
                                                     <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-4.webp" class="size-16 rounded-md object-cover" alt="User avatar"/>
                                                     <span class="text-xs font-bold">write a short paragraph about penguin
                                                         <br>
                                                         <a href="#" class="text-2xs font-extralight hover:underline focus:underline focus:outline-hidden dark:text-primaryDark">Read if bored</a>
                                                     </span>

                                                 </div>

                                             </div>

                                             @endfor
                                         </div>
                                         <div x-cloak x-show="selectedTab === 'likes'" id="tabpanelLikes" role="tabpanel" aria-label="likes">
                                             <div class="w-full max-w-2xl border-outline bg-surface-alt p-2 text-left dark:border-outline-dark dark:bg-surface-dark-alt rounded-lg border" >
                                                 <div class="flex items-start gap-2 text-on-surface-strong dark:text-on-surface-dark-strong">
                                                     <img src="https://thumbs.dreamstime.com/b/web-324830810.jpg" class="size-16 rounded-md object-cover" alt="User avatar"/>
                                                     <span class="text-xs font-bold">write a short  about penguin</span>
                                                 </div>
                                                 <!-- Actions -->
                                             </div>
                                         </div>
                                     </x-slot>

                                    </x-tabs.tabs-button>
                                 </div>


                            </div>
                            <div class="grid lg:grid-cols-4 gap-12 lg:py-12 py-8 grid-cols-2">
                                @foreach ($dataobject as $item)
                                <x-list.list-post :data="$item" :title="$title" :limit="$limit"  />

                               @endforeach

                            </div>

                        </div>
                      </aside>

                </div>
            </div>

        </x-slot>
    </x-page.section-page>
</div>
