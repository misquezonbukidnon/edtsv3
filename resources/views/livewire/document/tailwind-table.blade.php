<div>

    <div class="px-4 sm:px-5 lg:px-6">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Documents</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the Documents in your account including their
                    Reference ID,
                    Process, Description, Supplier and Status.</p>
            </div>
        </div>
        <div class="flex flex-col mt-8">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <!-- Selected row actions, only show when rows are selected. -->
                        <div class="absolute top-0 flex items-center h-12 space-x-3 left-12 bg-gray-50 sm:left-16">
                            <button type="button"
                                class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Bulk
                                edit</button>
                            <button type="button"
                                class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Delete
                                all</button>
                        </div>

                        <table class="min-w-full divide-y divide-gray-300 table-fixed">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="relative w-12 px-6 sm:w-16 sm:px-8">
                                        <input type="checkbox"
                                            class="absolute w-4 h-4 -mt-2 text-indigo-600 border-gray-300 rounded left-4 top-1/2 focus:ring-indigo-500 sm:left-6">
                                    </th>
                                    <th scope="col"
                                        class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                        Ref. #</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="inline-flex group">
                                            Process
                                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                            <span
                                                class="flex-none ml-2 text-gray-900 bg-gray-200 rounded group-hover:bg-gray-300">
                                                <!-- Heroicon name: solid/chevron-down -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="inline-flex group">
                                            End User
                                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                            <span
                                                class="flex-none ml-2 text-gray-900 bg-gray-200 rounded group-hover:bg-gray-300">
                                                <!-- Heroicon name: solid/chevron-down -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="inline-flex group">
                                            Description
                                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                            <span
                                                class="flex-none ml-2 text-gray-900 bg-gray-200 rounded group-hover:bg-gray-300">
                                                <!-- Heroicon name: solid/chevron-down -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="inline-flex group">
                                            Status
                                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                            <span
                                                class="flex-none ml-2 text-gray-900 bg-gray-200 rounded group-hover:bg-gray-300">
                                                <!-- Heroicon name: solid/chevron-down -->
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Selected: "bg-gray-50" -->
                                @foreach ($documentArray as $document)
                                    <tr>
                                        <td class="relative w-12 px-6 sm:w-16 sm:px-8">
                                            <!-- Selected row marker, only show when row is selected. -->
                                            <div class="absolute inset-y-0 left-0 w-0.5 bg-indigo-600"></div>

                                            <input type="checkbox"
                                                class="absolute w-4 h-4 -mt-2 text-indigo-600 border-gray-300 rounded left-4 top-1/2 focus:ring-indigo-500 sm:left-6">
                                        </td>
                                        <!-- Selected: "text-indigo-600", Not Selected: "text-gray-900" -->
                                        <td class="py-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap">
                                            {{ $document->reference_id }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $document->proccessType->name }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $document->office->name }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $document->purchaseDescription->name }}
                                        </td>
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $document->status->name }}
                                        </td>
                                        <td
                                            class="py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
