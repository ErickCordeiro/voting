<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filter" id="other_filter" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea"
                class="w-full placeholder-gray-900 rounded-xl bg-white border-none px-4 py-2 pl-8" name="" id="">

            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>
    </div> <!-- end filters -->

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-20 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quo quisquam tempore modi iure
                        at possimus fugit placeat perferendis, ducimus aperiam eaque excepturi sapiente atque quos!
                        Nihil optio, natus architecto perspiciatis. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Corporis iusto quis blanditiis labore nisi possimus consectetur porro,
                        architecto culpa provident voluptatibus rem nulla commodi nemo, inventore reprehenderit!
                        Dolor perspiciatis numquam, vitae dolorum quidem ullam voluptatem perferendis quia
                        exercitationem atque animi dolore! Maxime nobis natus maiores eius quae, iure nesciunt
                        aperiam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div 
                            x-data="{ isOpen: false }" 
                            class="flex items-center space-x-2"
                        >

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

                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
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
        </div><!-- idea-container -->
    </div><!-- end ideas-container -->

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">66</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-blue text-white border border-blue hover:border-blue hover:bg-blue-hover font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Voted</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quo quisquam tempore modi iure
                        at possimus fugit placeat perferendis, ducimus aperiam eaque excepturi sapiente atque quos!
                        Nihil optio, natus architecto perspiciatis. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Corporis iusto quis blanditiis labore nisi possimus consectetur porro,
                        architecto culpa provident voluptatibus rem nulla commodi nemo, inventore reprehenderit!
                        Dolor perspiciatis numquam, vitae dolorum quidem ullam voluptatem perferendis quia
                        exercitationem atque animi dolore! Maxime nobis natus maiores eius quae, iure nesciunt
                        aperiam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-yellow text-xxs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In progress
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-150 ease-in px-3 h-7">
                                <svg class="w-8 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                        style="color: rgba(163,163,163,.5)"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- idea-container -->
    </div><!-- end ideas-container -->

    <div class="ideas-container space-y-6 my-6">
        <div
            class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">32</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button
                        class="w-20 bg-gray-200 border border-gray-20 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-150 ease-in">Voted</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">Another random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quo quisquam tempore modi iure
                        at possimus fugit placeat perferendis, ducimus aperiam eaque excepturi sapiente atque quos!
                        Nihil optio, natus architecto perspiciatis. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Corporis iusto quis blanditiis labore nisi possimus consectetur porro,
                        architecto culpa provident voluptatibus rem nulla commodi nemo, inventore reprehenderit!
                        Dolor perspiciatis numquam, vitae dolorum quidem ullam voluptatem perferendis quia
                        exercitationem atque animi dolore! Maxime nobis natus maiores eius quae, iure nesciunt
                        aperiam.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-red text-xxs text-white font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed
                            </div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full transition duration-150 ease-in px-3 h-7">
                                <svg class="w-8 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                                        style="color: rgba(163,163,163,.5)"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- idea-container -->
    </div><!-- end ideas-container -->

</x-app-layout>
