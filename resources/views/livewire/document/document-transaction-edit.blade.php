<!-- This example requires Tailwind CSS v2.0+ -->

<div class="max-w-7xl my-5 mx-auto sm:px-6 lg:px-8">
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
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="{{ route('create-document') }}"
                        class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Document</a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Edit</a>
                </div>
            </li>
        </ol>
    </nav>
</div>




<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Information
            </h3>

        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Date of Entry
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        2021-11-22
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Reference No.
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        TF-99
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Office
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Municipal Social Welfare and Development Office
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Description
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        TO CONDUCT 2ND NDRRMC MEETING WITH THE COMMUNITY VOLUNTEERS OF 24 PRIORITY BARQANGAY OF KALAHI
                        ADDITIONAL FINANCING
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Particulars
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        Particulars
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Current Document Holder
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
                        Approved Budget for the Contract (ABC)
                    </dt>
                    <div>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            30,600.00
                        </dd>

                    </div>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Status
                    </dt>
                    <div>
                        <dd class="mt-1 text-m text-bold text-green-700 sm:mt-0 sm:col-span-2">
                            Document has been completely processed
                        </dd>

                    </div>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <h3 class="color-"></h3>
                </div>


            </dl>
        </div>
    </div>











    <!-- PURCHASE REQUEST -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-5">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Purchase Request
            </h3>

        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6" x-show="count === 1">
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

                    <div class="sm:col-span-4">
                        <div>
                            <p class="mt-1 text-sm text-gray-500">
                                Reference No.
                            </p>
                        </div>

                        <div class="mt-1">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
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

                    <div class="sm:col-span-6">
                        <label for="Particulars" class="block text-sm font-medium text-gray-700">
                            Particulars
                        </label>
                        <div class="mt-1">
                            <select id="Particulars" name="Particulars" autocomplete="Particulars-name"
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
            </div>
        </div>
    </div>




    <!-- PURCHASE ORDER -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-5">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Purchase Order
            </h3>

        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6" x-show="count === 2">

                    <div class="sm:col-span-2">
                        <div>
                            <p class="mt-1 text-sm text-gray-500">
                                Select Fund Type.
                            </p>
                        </div>

                        <div class="mt-1">
                            <input type="text" name="PO" id="last-name" autocomplete="family-name" placeholder="PO"
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
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
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
                            <select id="Particulars" name="Particulars" autocomplete="Particulars-name"
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
                            <input type="text" name="contract-price" id="contract-price" autocomplete="contract-price"
                                placeholder="Enter Contract Price"
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
                        <label for="supplieraddress" class="block text-sm font-medium text-gray-700">
                            Supplier Address
                        </label>
                        <div class="mt-1">
                            <input type="text" name="supplieraddress" id="supplieraddress"
                                autocomplete="supplieraddress" placeholder="Enter Supplier Address"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </div>
    </div>



    <!-- VOUCHER -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-5">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Voucher
            </h3>

        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6" x-show="count === 3">
                    <div class="sm:col-span-6">
                        <label for="voucherreferenceno" class="block text-sm font-medium text-gray-700">
                            Voucher Reference No.
                        </label>
                        <div class="mt-1">
                            <input type="text" name="voucherreferenceno" id="voucherreferenceno"
                                autocomplete="voucherreferenceno" placeholder="Emter Voucher Reference No."
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
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="Particulars" class="block text-sm font-medium text-gray-700">
                            Particulars
                        </label>
                        <div class="mt-1">
                            <select id="Particulars" name="Particulars" autocomplete="Particulars-name"
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
                            <input type="text" name="payee" id="payee" autocomplete="payee" placeholder="Enter Payee"
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
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit"
                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </div>
    </div>

</div>