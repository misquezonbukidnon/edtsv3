<div>

    <div class="px-4 sm:px-5 lg:px-6">
        <div class="sm:flex sm:items-center">

        </div>
        <div class="flex justify-end">
            <div class="mr-1">
                <select id="results" wire:model="paginateValue"
                    class="block w-auto py-2 pl-3 pr-10 mt-1 text-base rounded-md focus:ring-black focus:border-black sm:text-sm">
                    <option selected>10</option>
                    <option>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
            <div class="mr-1">
                <select id="processtypes" wire:model="filterByProcessType"
                    class="block w-auto py-2 pl-3 pr-10 mt-1 text-base rounded-md focus:ring-black focus:border-black sm:text-sm">
                    <option value="0">Select Process Type</option>
                    <option value="1">Purchase Request</option>
                    <option value="2">Purchase Order</option>
                    <option value="3">Voucher</option>
                </select>
            </div>
            <div class="relative mt-1 rounded-md shadow-sm">
                <input type="text" wire:model="search"
                    class="block pr-10 border-black rounded-md focus:outline-none focus:ring-black focus:border-black sm:text-sm"
                    placeholder="Search">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>
        </div>


        <div class="flex flex-col mt-8">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <!-- Selected row actions, only show when rows are selected. -->
                        <div
                            class="absolute top-0 flex items-center hidden h-12 space-x-3 left-12 bg-gray-50 sm:left-16">
                            <button type="button"
                                class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Bulk
                                edit</button>
                            <button type="button"
                                class="inline-flex items-center rounded border border-gray-300 bg-white px-2.5 py-1.5 text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">Delete
                                all</button>
                        </div>
                        <table class="min-w-full divide-y divide-gray-300 table-fixed">
                            <thead x-data="{ activeSort: false }" class="bg-gray-50">
                                <tr>
                                    <th scope="col" @click="activeSort =! activeSort"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        <button wire:click="sortBy('reference_id'), activeSort = true" scope="col"
                                            class="min-w-[12rem] flex text-left text-sm font-semibold text-gray-900">
                                            REF. #
                                            <svg x-show="!activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                                            </svg>

                                            <svg x-show="activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                                            </svg>
                                        </button>
                                    </th>
                                    <th scope="col" @click="activeSort =! activeSort"
                                        class="hidden lg:table-cell  py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        <button wire:click="sortBy('process_type_id')" scope="col"
                                            class="min-w-[12rem] flex text-left text-sm font-semibold text-gray-900">
                                            Classification
                                            <svg x-show="!activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                                            </svg>

                                            <svg x-show="activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                                            </svg>
                                        </button>
                                    </th>

                                    <th scope="col" @click="activeSort =! activeSort"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        <button wire:click="sortBy('office_id')" scope="col"
                                            class="min-w-[12rem] flex text-left text-sm font-semibold text-gray-900">
                                            End User
                                            <svg x-show="!activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                                            </svg>

                                            <svg x-show="activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                                            </svg>
                                        </button>
                                    </th>
                                    <th scope="col" @click="activeSort =! activeSort"
                                        class="hidden lg:table-cell py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        <button wire:click="sortBy('purchase_description_id')" scope="col"
                                            class="min-w-[12rem] flex text-left text-sm font-semibold text-gray-900">
                                            Description
                                            <svg x-show="!activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                                            </svg>

                                            <svg x-show="activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                                            </svg>
                                        </button>
                                    </th>
                                    <th scope="col" @click="activeSort =! activeSort"
                                        class="hidden lg:table-cell py-3.5 pl-4  pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        <button wire:click="sortBy('status_id')" scope="col"
                                            class="min-w-[12rem] flex text-left text-sm font-semibold text-gray-900">
                                            Status
                                            <svg x-show="!activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                                            </svg>

                                            <svg x-show="activeSort" xmlns="http://www.w3.org/2000/svg"
                                                class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                                            </svg>
                                        </button>
                                    </th>

                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <button class="sr-only">Edit</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Selected: "bg-gray-50" -->
                                @foreach ($documents as $document)
                                <tr>
                                    <!-- Selected: "text-indigo-600", Not Selected: "text-gray-900" -->
                                    <td
                                        class="w-full py-4 pl-4 pr-3 mr-5 text-sm font-medium text-gray-900 max-w-0 sm:w-100 sm:max-w-75 sm:pl-6">

                                        {{ $document->reference_id }}
                                        <dl class="font-normal w-100 lg:hidden">
                                            <dt class="mt-2 text-sm font-medium text-green-900 ">Process Type: </dt>
                                            <dd class=text-gray-700">{{ $document->proccessType->name }}
                                            </dd>
                                            <dt class="mt-2 text-sm font-medium text-green-900 ">Description: </dt>
                                            <dd class=text-gray-500 sm:hidden">
                                                {{ $document->purchaseDescription->name }}
                                            </dd>
                                            <dt class="mt-2 text-sm font-medium text-green-900 ">Status: </dt>
                                            <dd class=text-gray-500 sm:hidden">
                                                {{ $document->status->name }}
                                            </dd>
                                        </dl>
                                    </td>

                                    <td class="hidden pl-6 py-4 text-sm text-gray-500 lg:table-cell">
                                        {{ $document->proccessType->name }}</td>
                                    <td class="pl-6 py-4 text-sm text-gray-500 lg:table-cell">
                                        {{ $document->office->name }}</td>
                                    <td class="hidden pl-6 py-4 text-sm text-gray-500 lg:table-cell">
                                        {{ $document->purchaseDescription->name }}
                                    </td>
                                    <td class="hidden pl-6 text-sm text-gray-500 lg:table-cell">
                                        {{ $document->status->name }}
                                    </td>
                                    <td class="flex h-50  px-3 py-4 text-sm text-gray-500 sm:table-cell ">
                                        <div class="flex ">
                                            <a href="/document/edit/{{$document->id}}"
                                                class="mr-1 text-indigo-600 hover:text-indigo-900"><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                        <div class="px-10 mx-auto mt-10 mb-10">
                            {{ $documents->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>