<div x-show="chat" class="z-10  ">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="fixed bg-gray-500 bg-opacity-20  inset-0 overflow-hidden" aria-labelledby="slide-over-title"
        role="dialog" aria-modal="true">
        <div class="absolute inset-0 overflow-hidden">
            <!-- Background overlay, show/hide based on slide-over state. -->
            <div class="absolute inset-0" aria-hidden="true">
                <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex">
                    <!--
          Slide-over panel, show/hide based on slide-over state.

          Entering: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-full"
            To: "translate-x-0"
          Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
            From: "translate-x-0"
            To: "translate-x-full"
        -->
                    <div class="w-screen overflow-hidden max-w-md">
                        <div class="h-full flex flex-col py-6 bg-white  shadow-xl overflow-y-scroll">
                            <div class="px-4 sm:px-6">
                                <div class="flex items-start  justify-between">
                                    <h2 class="text-lg flex font-medium text-gray-900" id="slide-over-title">
                                        <span class="absolute flex-shrink-0 flex items-center justify-center">
                                            Messenger
                                            <span class="h-3 w-3 ml-2 rounded-full bg-green-500" aria-hidden="true">
                                            </span>
                                        </span>
                                    </h2>
                                    <div class="ml-3 h-7 flex items-center">
                                        <button type="button" @click="chat = ! chat"
                                            class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <span class="sr-only">Close panel</span>
                                            <!-- Heroicon name: outline/x -->
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 relative flex-1 px-4 sm:px-6">
                                <!-- Replace with your content -->
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div class=" bg-white">
                                    <ul role="list" class="divide-y   divide-gray-200">
                                        <li class="py-4 cursor-pointer  ">
                                            <div class="flex space-x-3">
                                                <img class="h-12 w-12 rounded-full"
                                                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    alt="">
                                                <div class="flex-1 space-y-1">
                                                    <div class="flex items-center justify-between">
                                                        <h3 class="text-sm font-medium">Lindsay Walton</h3>
                                                        <p class="text-sm text-gray-500">1h</p>
                                                    </div>
                                                    <p class="text-sm text-gray-500">This is my Last message</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-4 cursor-pointer ">
                                            <div class="flex space-x-3">
                                                <img class="h-12 w-12 rounded-full"
                                                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                    alt="">
                                                <div class="flex-1 space-y-1">
                                                    <div class="flex items-center justify-between">
                                                        <h3 class="text-sm font-medium">Lindsay Walton</h3>
                                                        <p class="text-sm text-gray-500">1h</p>
                                                    </div>
                                                    <p class="text-sm text-gray-500">This is my Last message</p>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- More items... -->
                                    </ul>
                                </div>

                                <!-- /End replace -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>