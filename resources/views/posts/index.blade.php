<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-5 flex justify-between">
                <div class="mb-2 w-full p-5">
                    <div class=" w-fit">
                        <ul class="flex text-sm">
                            <li>
                                <x-nav-link class="border-b-2 p-2" :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                                    {{ __('For you') }}
                                </x-nav-link>
                            </li>
                            <x-nav-link class="border-b-2 p-2" :href="route('posts.index')" :active="request()->routeIs('posts.create')">
                                {{ __('Following') }}
                            </x-nav-link>
                        </ul>
                    </div>
                    <div class="mt-10 flex space-y-2 flex-col">
                        @foreach ($posts as $post)
                            <x-post.card :post="$post" />
                        @endforeach
                        {{$posts->links()}}
                    </div>
                </div>
                <div>
                    <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Suggested Blogs</h5>
                            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                View all
                            </a>
                    </div>
                    <div class="flow-root">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Neil image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Neil Sims
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@windster.com
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $320
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center ">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Bonnie Green
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@windster.com
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $3467
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-2.jpg" alt="Michael image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Michael Gough
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@windster.com
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $67
                                        </div>
                                    </div>
                                </li>
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center ">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-4.jpg" alt="Lana image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Lana Byrd
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@windster.com
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $367
                                        </div>
                                    </div>
                                </li>
                                <li class="pt-3 pb-0 sm:pt-4">
                                    <div class="flex items-center ">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Thomas image">
                                        </div>
                                        <div class="flex-1 min-w-0 ms-4">
                                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                Thomes Lean
                                            </p>
                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                email@windster.com
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                            $2367
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
