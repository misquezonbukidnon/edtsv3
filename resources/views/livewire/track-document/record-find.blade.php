<!-- This example requires Tailwind CSS v2.0+ -->
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


    <nav class="flex my-5" aria-label="Breadcrumb">
        <ol role="list" class="bg-white rounded-md shadow px-6 flex space-x-4">
            <li class="flex">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/home -->
                        <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>

            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="{{ route('endorsement') }}"
                        class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Track Document</a>
                </div>
            </li>

            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Record</a>
                </div>
            </li>

        </ol>
    </nav>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Details
            </h3>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Date of Entry
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        2021-01-26
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Reference No.
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        GF-5
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Days In Progress
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        350
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Office
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Municipal Engineer Office
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Description
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        CONTRUCTION OF COA/COMELEC BODEGA-Bal. 3, Poblacion
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Particulars
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Construction Management Services
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Document Created By
                    </dt>
                    <div>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Neil Darwin Cadampog
                        </dd>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Municipal Budget Office
                        </dd>
                    </div>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Currently Processed By
                    </dt>
                    <div>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Hazel Acusar
                        </dd>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            MMO - Bids and Award Committee
                        </dd>
                    </div>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Approved Budget for the Contract (ABC)
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        1,500,000.00
                    </dd>
                </div>


            </dl>
        </div>
    </div>





    <div class="bg-white my-5 shadow overflow-hidden sm:rounded-lg" x-data="{Attacahed: false}">
        <div class="px-4  flex justify-between  py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Timeline
            </h3>
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="relative inline-block flex text-left">
                <div>
                    <div>
                        <button type="button" @click="Attacahed = ! Attacahed"
                            class="inline-flex mr-1 justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                            id="menu-button" aria-expanded="true" aria-haspopup="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            Attached Document
                        </button>
                    </div>


                    <div x-show="Attacahed" x-cloak
                        class="origin-top-right z-30 absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1 z-10" role="none">
                            <p class="text-gray-700 block px-4 py-2 text-sm"> Purchase Request</p>
                            <p class="text-gray-700 block px-4 py-2 text-sm"> Obligation Request</p>
                            <p class="text-gray-700 block px-4 py-2 text-sm"> Project Procurement Management Plan</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flow-root px-10 py-10">
                <ul role="list" class="-mb-8 pb-10">
                    <li>
                        <div class="relative ">
                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span
                                        class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                                        <!-- Heroicon name: solid/user -->
                                        <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                    <div>
                                        <p class="text-sm text-gray-500">Rhea Jill Palahang has endorsed GF-5 to MMO -
                                            BAC <a href="#" class="font-medium text-gray-900">- Rhea Jill Palahang -
                                                MMO</a></p>
                                    </div>
                                    <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                        <time datetime="2020-09-20">Sep 20</time>
                                    </div>
                                </div>
                            </div>
                            <section aria-labelledby="activity-title" class="mt-2 mb-2 ml-8 xl:mt-2">
                                <div>
                                    <div class="divide-y divide-gray-200">
                                        <div class="py-6 ">
                                            <!-- Activity feed-->
                                            <div class="flow-root">
                                                <ul role="list" class="-mb-8">
                                                    <li>
                                                        <div class="relative pb-8">
                                                            <span
                                                                class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                                                aria-hidden="true"></span>
                                                            <div class="relative flex items-start space-x-3">
                                                                <div class="relative">
                                                                    <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                                                        src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                                                        alt="">

                                                                    <span
                                                                        class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                                        <!-- Heroicon name: solid/chat-alt -->
                                                                        <svg class="h-5 w-5 text-gray-400"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="min-w-0 flex-1">
                                                                    <div>
                                                                        <div class="text-sm">
                                                                            <a href="#"
                                                                                class="font-medium text-gray-900">Jayson
                                                                                Alanano</a>
                                                                        </div>
                                                                        <p class="mt-0.5 text-sm text-gray-500">
                                                                            Commented 6d ago
                                                                        </p>
                                                                    </div>
                                                                    <div class="mt-2 text-sm text-gray-700">
                                                                        <p>
                                                                            For Posting - Public Bidding
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="relative pb-8">
                                                            <div class="relative flex items-start space-x-3">
                                                                <div class="relative">
                                                                    <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                                                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                                                        alt="">

                                                                    <span
                                                                        class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                                        <!-- Heroicon name: solid/chat-alt -->
                                                                        <svg class="h-5 w-5 text-gray-400"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="min-w-0 flex-1">
                                                                    <div>
                                                                        <div class="text-sm">
                                                                            <a href="#"
                                                                                class="font-medium text-gray-900">Ivan
                                                                                Nacion</a>
                                                                        </div>
                                                                        <p class="mt-0.5 text-sm text-gray-500">
                                                                            Commented 2h ago
                                                                        </p>
                                                                    </div>
                                                                    <div class="mt-2 text-sm text-gray-700">
                                                                        <p>
                                                                            Pre-bid conference on February 11, 2021
                                                                            Public Bidding on February 23, 2021
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mt-6">
                                                <div class="flex space-x-3">
                                                    <div class="flex-shrink-0">
                                                        <div class="relative">
                                                            <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                                                src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                                                alt="">

                                                            <span
                                                                class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                                <!-- Heroicon name: solid/chat-alt -->
                                                                <svg class="h-5 w-5 text-gray-400"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="min-w-0 flex-1">
                                                        <form action="#">
                                                            <div>
                                                                <label for="comment" class="sr-only">Comment</label>
                                                                <textarea id="comment" name="comment" rows="3"
                                                                    class="shadow-sm block w-full focus:ring-gray-900 focus:border-gray-900 sm:text-sm border border-gray-300 rounded-md"
                                                                    placeholder="Leave a comment"></textarea>
                                                            </div>
                                                            <div class="mt-6 flex items-center justify-end space-x-4">

                                                                <button type="submit"
                                                                    class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                                                    Comment
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

</div>