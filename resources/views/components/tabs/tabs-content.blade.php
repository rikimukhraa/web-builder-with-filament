@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])
<div x-data="{ selectedTab: 'groups' }" class="w-full">
    <div x-on:keydown.right.prevent="$focus.wrap().next()" x-on:keydown.left.prevent="$focus.wrap().previous()" class="flex gap-2 overflow-x-auto border-b border-outline dark:border-outline-dark" role="tablist" aria-label="tab options">
        <button x-on:click="selectedTab = 'groups'" x-bind:aria-selected="selectedTab === 'groups'" x-bind:tabindex="selectedTab === 'groups' ? '0' : '-1'" x-bind:class="selectedTab === 'groups' ? 'font-bold text-primary border-b-2 border-primary dark:border-primary-dark dark:text-primary-dark' : 'text-on-surface font-medium dark:text-on-surface-dark dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-on-surface-strong'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelGroups" >Terbaru</button>
        <button x-on:click="selectedTab = 'likes'" x-bind:aria-selected="selectedTab === 'likes'" x-bind:tabindex="selectedTab === 'likes' ? '0' : '-1'" x-bind:class="selectedTab === 'likes' ? 'font-bold text-primary border-b-2 border-primary dark:border-primary-dark dark:text-primary-dark' : 'text-on-surface font-medium dark:text-on-surface-dark dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-on-surface-strong'" class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelLikes" >Populer</button>
    </div>
    <div class="px-2 py-4 text-on-surface dark:text-on-surface-dark">
        <div x-cloak x-show="selectedTab === 'groups'" id="tabpanelGroups" role="tabpanel" aria-label="groups">
            @for($i = 0; $i < 5; $i++)
            <div class="mb-2 w-full max-w-2xl border-outline bg-surface-alt p-2 text-left dark:border-outline-dark dark:bg-surface-dark-alt rounded-lg border" >
                <div class="flex items-start gap-2 text-on-surface-strong dark:text-on-surface-dark-strong">
                    <img src="https://thumbs.dreamstime.com/b/web-324830810.jpg" class="size-16 rounded-md object-cover" alt="User avatar"/>
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
    </div>
</div>