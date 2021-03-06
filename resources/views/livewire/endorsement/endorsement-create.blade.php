<!-- This example requires Tailwind CSS v2.0+ -->
<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

    <nav class="flex my-5" aria-label="Breadcrumb">
        <ol role="list" class="flex px-6 space-x-4 bg-white rounded-md shadow">
            <li class="flex">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500">
                        <!-- Heroicon name: solid/home -->
                        <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
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
                        class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Endorsement</a>
                </div>
            </li>

            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="endorsementform" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Create
                        Endorsement</a>
                </div>
            </li>

        </ol>
    </nav>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                Applicant Information
            </h3>
        </div>
        <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Date of Entry
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        2021-11-04
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Reference No.
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        GF-1239
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Office
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        MMO - Personal Staff
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Description
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        HIRING OF VEHICLE FOR ACTIVITIES, FREIGHT AND HANDLING ACTIVITIES OF THE MUNICIPALITY OF QUEZON
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Particulars
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Transportation and Communications Services
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Document Created By
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Neil Darwin Cadampog, Municipal Budget Office
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Currently Assigned To
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Rhea Jill Palahang, Municipal Mayor's Office
                    </dd>
                </div>

                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Approved Budget for the Contract (ABC)
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        70,000.00
                    </dd>
                </div>
            </dl>
        </div>
    </div>




    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="my-5 overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                Date of Endorsement
            </h3>
        </div>
        <div class="px-4 pb-8 border-t border-gray-200">
            <div>
                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="date" class="block text-sm font-medium text-gray-700">
                            Date of Endorsement
                        </label>
                        <div class="mt-1">
                            <input type="date" name="date" id="date" autocomplete="given-date"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="recievingoffice" class="block text-sm font-medium text-gray-700">
                            Receiving Office
                        </label>
                        <div class="mt-1">
                            <select id="recievingoffice" name="recievingoffice"
                                class="block w-full py-2 pl-3 pr-10 mt-1 text-base border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Select Office</option>
                                <option selected>Municipal Budget Office</option>
                                <option>Municipal Mayor's Office</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="Endorsementstatus" class="block text-sm font-medium text-gray-700">
                            Endorsement Status
                        </label>
                        <div class="mt-1">
                            <select id="Endorsementstatus" name="Endorsementstatus"
                                autocomplete="Endorsementstatus-name"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Select Status</option>
                                <option>Endorse Document</option>
                                <option>Cancel Document</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="Endorsementstatus" class="block text-sm font-medium text-gray-700">
                            Receiving Staff
                        </label>
                        <div class="mt-1">
                            <select id="Endorsementstatus" name="Endorsementstatus"
                                autocomplete="Endorsementstatus-name"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>Select Staff</option>
                                <option>MIS - Ivan Nacion</option>
                                <option>MIS - Jayson Alanano</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="attachment" class="block text-sm font-medium text-gray-700">
                            Attachments
                        </label>
                        <div class="mt-1">
                            <select id="attachment" wire:model="attachmentsData" name="attachment"
                                autocomplete="attachment-name"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                multiple>
                                <option disabled>Select Attachments</option>
                                <option value="General Payroll">General Payroll</option>
                                <option value="Overtime Order">Overtime Order</option>
                            </select>

                            <ul>
                                {{-- <li>{{ $attachmentsData[1] }}</li> --}}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="my-5 overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                Document Update
            </h3>
        </div>
        <div class="px-4 py-5 pb-8 border-t border-gray-200">

            <form action="#">
                <div>
                    <div class="flex items-center" aria-orientation="horizontal" role="tablist">
                        <!-- Selected: "text-gray-900 bg-gray-100 hover:bg-gray-200", Not Selected: "text-gray-500 hover:text-gray-900 bg-white hover:bg-gray-100" -->
                        <button id="tabs-1-tab-1"
                            class="text-gray-500 hover:text-gray-900 bg-white hover:bg-gray-100 px-3 py-1.5 border border-transparent text-sm font-medium rounded-md"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">Write</button>
                        <!-- Selected: "text-gray-900 bg-gray-100 hover:bg-gray-200", Not Selected: "text-gray-500 hover:text-gray-900 bg-white hover:bg-gray-100" -->

                        <!-- These buttons are here simply as examples and don't actually do anything. -->
                        <div class="flex items-center ml-auto space-x-5">
                            <div class="flex items-center">
                                <button type="button"
                                    class="-m-2.5 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Insert link</span>
                                    <!-- Heroicon name: solid/link -->
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center">
                                <button type="button"
                                    class="-m-2.5 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Insert code</span>
                                    <!-- Heroicon name: solid/code -->
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex items-center">
                                <button type="button"
                                    class="-m-2.5 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Mention someone</span>
                                    <!-- Heroicon name: solid/at-symbol -->
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div id="tabs-1-panel-1" class="p-0.5 -m-0.5 rounded-lg" aria-labelledby="tabs-1-tab-1"
                            role="tabpanel" tabindex="0">
                            <label for="comment" class="sr-only">Comment</label>
                            <div>
                                <textarea rows="5" name="comment" id="comment" style="height: 200px !important"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    placeholder="Example: Check for Mayor's Signature, For Approval, For Attachment of Supporting DocumentsFor Award, For BAC Meeting (Mode of Procurement),For Canvassing, For Disbursement and Completion of Voucher,For Journal Entry Voucher, For Mayor's Approval (NOA of Summary of Price Quotation), For Mayor's Signature .etc"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex justify-end mt-2">
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 mr-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </button>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>
