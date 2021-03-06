<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
            </div>
            <div class="w-full md:mx-4 mt-3 md:mt-0">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline">{{ $idea->title }}</a>
                </h4>
                <div class="text-gray-600 mt-3">
                    {{ $idea->description }}
                </div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400 mb-4">
                        <div class="hidden md:block font-bold text-gray-900">{{
                            $idea->user->name}}</div>
                        <div class="hidden md:block">&bull;</div>
                        <div>{{ $idea->created_at->diffForHumans() }}</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2" x-data="{ isOpen: false }">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button @click="isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-150 ease-in px-3 h-7">
                            <svg class="w-8 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                    style="color: rgba(163,163,163,.5)"></path>
                            </svg>
                            <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8 z-10 md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                <li><a href="#"
                                        class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Mark
                                        as Spam</a></li>
                                <li><a href="#"
                                        class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Delete
                                        Post</a></li>
                            </ul>
                        </button>
                    </div>

                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">12</div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                        </div>
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5">Vote</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end idea-container -->

    <div class="buttons-container flex items-center justify-end md:justify-between mt-6">
        <div class="flex items-center space-x-4 md:mr-6">
            <div class="relative" x-data="{ isOpen: false }">
                <button type="button" @click="isOpen = !isOpen"
                    class="flex items-center justify-center h-11 w-32 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover
            transition duration-150 ease-in px-6 py-3 text-white">
                    <span>Replay</span>
                </button>
                <div x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-10 w-96 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2 md:ml-8 top-10
                    md:top-6 md:left-0 -left-24">
                    <form action="#" class="space-y-4 px-4 py-6 ">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placholder-gray-900 border-none px-4 py-2"
                                placeholder="Go ahead, don't be shy. Share you thoughts..."></textarea>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button type="submit"
                                class="flex items-center justify-center w-2/3 h-11 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover
                                transition duration-150 ease-in px-6 py-3 text-white">
                                <span>Post Commnets</span>
                            </button>
                            <button type="button"
                                class="flex items-center justify-center w-1/3 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3 transition duration-150 ease-in">
                                <svg class="w-4 text-gray-500 -rotate-45" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                    </path>
                                </svg>
                                <span class="ml-2">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="relative" x-data="{ isOpen: false }">
                <button type="button" @click="isOpen = !isOpen"
                    class="flex items-center justify-center w-36 h-11 
                    text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3 transition duration-150 ease-in">
                    <span>Set Status</span>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                    @keydown.escape.window="isOpen = false"
                    class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2 md:ml-8 top-10
                    md:top-6 right-0 md:left-0">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-black border-none"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-purple border-none"
                                        name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-yellow border-none"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-green border-none"
                                        name="radio-direct" value="4">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-red border-none"
                                        name="radio-direct" value="5">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="4"
                                class="w-full text-sm bg-gray-100 rounded-xl placholder-gray-900 border-none px-4 py-2"
                                placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3 transition duration-150 ease-in">
                                <svg class="w-4 text-gray-500 -rotate-45" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                    </path>
                                </svg>
                                <span class="ml-2">Attach</span>
                            </button>
                            <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover
                                transition duration-150 ease-in px-6 py-3 text-white">
                                <span>Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="font-normal inline-flex items-center">
                                <input type="checkbox" name="notify_voters" class="rounded bg-gray-200 border-none"
                                    checked="">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button"
                class="w-36 h-11 text-sm bg-gray-200 font-semibold uppercase
                    rounded-xl border border-gray-200 hover:border-gray-400 px-6 py-3 transition duration-150 ease-in">
                <span>Vote</span>
            </button>
        </div>
    </div><!-- end buttons container -->

    <div class="comments-container relative space-y-6 ml-14 pt-4 my-8 mt-1">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none mx-2">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-2 mt-4">
                    <div class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quo quisquam tempore modi iure
                        at possimus fugit placeat perferendis, ducimus aperiam eaque excepturi sapiente atque quos!
                        Nihil optio, natus architecto perspiciatis. Lorem ipsum dolor sit amet consectetur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">Patrick Behanck</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2" x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-150 ease-in px-3 h-7">
                                <svg class="w-8 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                        style="color: rgba(163,163,163,.5)"></path>
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="z-10 absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-10
                                    md:top-6 right-0 md:left-0">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end comment-container -->

        <div class="comment-container relative is-admin bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 flex-col md:flex-row px-4 py-6">
                <div class="flex-none md:text-center text-left mx-2 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                    <span class="text-blue text-xxs uppercase mt-2 block font-semibold ml-2 md:ml-0">Admin</span>
                </div>
                <div class="w-full mx-2 md:mx-4 mt-4">
                    <h4 class="text-xl font-semibold mb-3">
                        <a href="#" class="hover:underline">Status Changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quo quisquam tempore modi iure
                        at possimus fugit placeat perferendis, ducimus aperiam eaque excepturi sapiente atque quos!
                        Nihil optio, natus architecto perspiciatis. Lorem ipsum dolor sit amet consectetur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Evelin Tiemi</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2" x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-150 ease-in px-3 h-7">
                                <svg class="w-8 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                        style="color: rgba(163,163,163,.5)"></path>
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3
                                    md:ml-8 top-10 md:top-6 right-0 md:left-0 z-10">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end comment-container -->


        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none mx-2 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-2 md:mx-4 mt-4">
                    <div class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quo quisquam tempore modi iure
                        at possimus fugit placeat perferendis, ducimus aperiam eaque excepturi sapiente atque quos!
                        Nihil optio, natus architecto perspiciatis. Lorem ipsum dolor sit amet consectetur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">Patrick Behanck</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2" x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-150 ease-in px-3 h-7">
                                <svg class="w-8 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                        style="color: rgba(163,163,163,.5)"></path>
                                </svg>
                                <ul x-cloak x-show.transition.origin.top.left="isOpen" @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="z-10 absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-10
                                    md:top-6 right-0 md:left-0">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block trasition duration-150 ease-in px-5 py-3">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end comment-container -->


    </div> <!-- end comments-container-->
</x-app-layout>
