<div x-data="{ count: 0 }">
    <div class="max-w-7xl mt-5 mx-auto sm:px-6 lg:px-8">
        <nav class="flex " aria-label="Breadcrumb">
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
                        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44"
                            preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                        </svg>
                        <a href="{{ route('create-document') }}"
                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Create Document</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <div x-cloak class="max-w-7xl mb-16 mt-5 mx-auto sm:px-6 lg:px-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Registration
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Details
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form onsubmit="return false">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">


                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="document-name" class="block text-sm font-medium text-gray-700">Date
                                            of
                                            Entry</label>
                                        <input type="date" name="document-name" id="dateofentry"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <div>
                                            <label class="text-base font-medium text-gray-900">Select Process [test -
                                                {{ $process_type_id }}]</label>
                                            <fieldset class="mt-4">

                                                <div
                                                    class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                    <div class="flex items-center">
                                                        <input @click="count = 1" id="email"
                                                            wire:model="process_type_id" value="1"
                                                            name="notification-method" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="email"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Purchase Request
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center">
                                                        <input id="sms" @click="count = 2" wire:model="process_type_id"
                                                            value="2" name="notification-method" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="sms"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Purchase Order
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center" @click="count = 3">
                                                        <input @click="count = 3" id="push" wire:model="process_type_id"
                                                            value="3" name="notification-method" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                        <label for="push"
                                                            class="ml-3 block text-sm font-medium text-gray-700">
                                                            Voucher
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                </div>

                                <!-- form -->

                                <div class="pt-8">
                                    <div class="hidden sm:block" aria-hidden="true">
                                        <div class="pb-4">
                                            <div class="border-t border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div x-show="count === 1">
                                        <h1>Purchase Request</h1>
                                        <p class="mt-1 text-sm  text-gray-500">
                                            Purchase Request Details
                                        </p>
                                    </div>

                                    <div x-show="count === 2">
                                        <h1>Purchase Order</h1>
                                        <p class="mt-1 text-sm  text-gray-500">
                                            Purchase Order Details
                                        </p>
                                    </div>

                                    <div x-show="count === 3">
                                        <h1>Voucher</h1>
                                        <p class="mt-1 text-sm  text-gray-500">
                                            Voucher Details
                                        </p>
                                    </div>
                                    <!----------------------------------------------------------------- form for Purchase Request here ------------------------------------------------------>
                                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6"
                                        x-show="count === 1">
                                        <div class="sm:col-span-6">
                                            <label for="office" class="block text-sm font-medium text-gray-700">
                                                Office
                                            </label>
                                            <div class="mt-1">
                                                <select id="office" name="office" autocomplete="office-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Click to Select</option>
                                                    <option> MMO - Management Information System Division</option>
                                                    <option> Municipal Disaster Risk Reduction and Management Office
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Select Fund Type.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <select id="Fund" name="Fund" autocomplete="Fund-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Select Fund</option>
                                                    <option> General Fund</option>
                                                    <option> Trust Fund</option>
                                                    <option> Special Education Fund</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="sm:col-span-4">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" name="last-name" id="last-name"
                                                    autocomplete="family-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                                Particulars
                                            </label>
                                            <div class="mt-1">
                                                <select id="Particulars" name="Particulars"
                                                    autocomplete="Particulars-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Click to Select</option>
                                                    <option> Agricultural Machinery and Equipment</option>
                                                    <option> Agricultural Products (Seeds, Seedlings, Plants..)</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="purpose" class="block text-sm font-medium text-gray-700">
                                                Purpose
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="purpose" id="purpose" autocomplete="purpose"
                                                    placeholder="Purchase Request Purpose"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="budget" class="block text-sm font-medium text-gray-700">
                                                Approved Budget for the Contract
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="budget" id="budget" autocomplete="budget"
                                                    placeholder="Please enter the amount"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- end -->
                                    <!----------------------------------------------------------------- form for Purchase Order here ------------------------------------------------------>
                                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6"
                                        x-show="count === 2">

                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Purchase Order Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" name="PO" id="last-name" autocomplete="family-name"
                                                    placeholder="PO"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                                    disabled>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" name="last-name" id="last-name"
                                                    autocomplete="family-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>



                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Select Fund Type.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <select id="Fund" name="Fund" autocomplete="Fund-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Select Fund</option>
                                                    <option> General Fund</option>
                                                    <option> Trust Fund</option>
                                                    <option> Special Education Fund</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" name="last-name" id="last-name"
                                                    autocomplete="family-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="office" class="block text-sm font-medium text-gray-700">
                                                Office
                                            </label>
                                            <div class="mt-1">
                                                <select id="office" name="office" autocomplete="office-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Click to Select</option>
                                                    <option> MMO - Management Information System Division</option>
                                                    <option> Municipal Disaster Risk Reduction and Management Office
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                                Particulars
                                            </label>
                                            <div class="mt-1">
                                                <select id="Particulars" name="Particulars"
                                                    autocomplete="Particulars-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Click to Select</option>
                                                    <option> Agricultural Machinery and Equipment</option>
                                                    <option> Agricultural Products (Seeds, Seedlings, Plants..)</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="purpose" class="block text-sm font-medium text-gray-700">
                                                Purpose
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="purpose" id="purpose" autocomplete="purpose"
                                                    placeholder="Purchase Request Purpose"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="contract-price" class="block text-sm font-medium text-gray-700">
                                                Contract Price
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="contract-price" id="contract-price"
                                                    autocomplete="contract-price" placeholder="Enter Contract Price"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="supplier" class="block text-sm font-medium text-gray-700">
                                                Supplier
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="supplier" id="supplier" autocomplete="supplier"
                                                    placeholder="Enter Supplier"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="supplieraddress"
                                                class="block text-sm font-medium text-gray-700">
                                                Supplier Address
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="supplieraddress" id="supplieraddress"
                                                    autocomplete="supplieraddress" placeholder="Enter Supplier Address"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                    </div>



                                    <!-- end -->


                                    <!----------------------------------------------------------------- form for Voucher ------------------------------------------------------>
                                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6"
                                        x-show="count === 3">
                                        <div class="sm:col-span-6">
                                            <label for="voucherreferenceno"
                                                class="block text-sm font-medium text-gray-700">
                                                Voucher Reference No.
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="voucherreferenceno" id="voucherreferenceno"
                                                    autocomplete="voucherreferenceno"
                                                    placeholder="Emter Voucher Reference No."
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Select Fund Type.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <select id="Fund" name="Fund" autocomplete="Fund-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Select Fund</option>
                                                    <option> General Fund</option>
                                                    <option> Trust Fund</option>
                                                    <option> Special Education Fund</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Sub Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" name="last-name" id="last-name"
                                                    autocomplete="family-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                                Particulars
                                            </label>
                                            <div class="mt-1">
                                                <select id="Particulars" name="Particulars"
                                                    autocomplete="Particulars-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                                    <option>Click to Select</option>
                                                    <option> Agricultural Machinery and Equipment</option>
                                                    <option> Agricultural Products (Seeds, Seedlings, Plants..)</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="purpose" class="block text-sm font-medium text-gray-700">
                                                Purpose
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="purpose" id="purpose" autocomplete="purpose"
                                                    placeholder="Purchase Request Purpose"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>



                                        <div class="sm:col-span-6">
                                            <label for="payee" class="block text-sm font-medium text-gray-700">
                                                Payee
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="payee" id="payee" autocomplete="payee"
                                                    placeholder="Enter Payee"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="amount" class="block text-sm font-medium text-gray-700">
                                                Amount
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" name="amount" id="amount" autocomplete="amount"
                                                    placeholder="Enter Amount"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>

                                    </div>

                                    <!-- end -->
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>



        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>



        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col ">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <divclass="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ref #.
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Process
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        End User/ Supplier/ Payee
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Odd row -->
                                <tr class="bg-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        (PAYABLE 100-21-12-07574)
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        Voucher
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        PHILIPPINE DUPLICATORS, INC.
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        USE FOR PRINTING OF FORMS
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        In Progress
                                    </td>
                                    <td class="px-6 flex py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="/document/edit/12"
                                            class="text-indigo-600 hover:text-indigo-900 mr-2"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg></a>
                                        <a href="/find/record/2" class="text-indigo-600 hover:text-indigo-900 mr-2"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg></a>
                                        <a @click="QR = true" class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                            </svg></a>
                                    </td>
                                </tr>
                                <!-- Even row -->


                                <!-- More people... -->
                            </tbody>
                        </table>


                </div>
                <!-- modals -->
                <div>
                    <livewire:document.document-modal-qr />
                </div>

                <!-- end of modals -->
            </div>
        </div>


    </div>
</div>