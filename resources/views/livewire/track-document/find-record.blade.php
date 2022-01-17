<!-- This example requires Tailwind CSS v2.0+ -->
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 flex justify-between py-5 sm:px-6">
            <h3 class="text-lg leading-6 mr-2 font-medium text-gray-900">
                Filter Records
            </h3>

            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
            <button type="button" class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" role="switch" aria-checked="false" aria-labelledby="availability-label" aria-describedby="availability-description">
                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                <span aria-hidden="true" class="translate-x-0 pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
            </button>

        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <span class="relative z-0  p-10 flex justify-center shadow-sm rounded-md">
                <div class="mr-2">
                    <label for="location" class="block text-sm font-medium text-gray-700">Office</label>
                    <select id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Select Office</option>
                        <option>MMO - Management Information System Division</option>
                        <option selected>MMO - Purchasing Office</option>
                        <option>MMO - General Services Office</option>
                    </select>
                </div>
                <div class="mr-2">
                    <label for="location" class="block text-sm font-medium text-gray-700">Classification</label>
                    <select id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Select Classification </option>
                        <option>Purchase Order</option>
                        <option>Purchase Request</option>
                        <option>Voucher</option>
                    </select>
                </div>
                <div class="mr-2">
                    <label for="location" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="location" name="location" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>In progress</option>
                        <option selected>Pending</option>
                        <option>Complete</option>
                    </select>
                </div>
            </span>
        </div>
    </div>



    <div class="bg-white shadow mt-5 overflow-hidden sm:rounded-lg">
        <div class="px-4 flex justify-between py-5 sm:px-6">
            <h3 class="text-lg leading-6 mr-2 font-medium text-gray-900">
                Filter Records
            </h3>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Ref. #
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Sub Ref. #
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Type
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                End User/Supplier/Payee
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Description
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                                2021-06-24
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                GF-664
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Purchase Request
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                MMO - Personal Staff
                                            </td>
                                            <td class="px-6 py-4  text-sm text-gray-500">
                                                OTHER SUPPLIES- LAGA TA QUEZON
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Not Endorsed
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                Not Endorsed
                                            </td>
                                            <td class="px-6 flex py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="/find/record/2" class="text-indigo-600 mr-2 hover:text-indigo-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </dl>
        </div>
    </div>

</div>