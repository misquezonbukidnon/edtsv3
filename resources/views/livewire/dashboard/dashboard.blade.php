<div x-data="{PO: false, PR: false, Voucher: false}">


    <div>
        <div class=" pt-12 sm:pt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Summary Overview
                    </h2>
                </div>
            </div>
            <div class="mt-10 pb-12  sm:pb-16">


                <div class="relative">
                    <div class="absolute inset-0 h-1/2 "></div>
                    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-4xl mx-auto">
                            <dl class="rounded-lg bg-white  shadow-lg sm:grid sm:grid-cols-3">
                                <div
                                    class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                        In Progress
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-blue-600">
                                        13
                                    </dd>
                                </div>
                                <div
                                    class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                        Cancelled
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-red-600">
                                        37
                                    </dd>
                                </div>
                                <div
                                    class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                        Completed
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-green-600">
                                        1836
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-7">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class=" overflow-x-auto sm:-mx-2 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Documents
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        In Progress
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Cancelled
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Completed
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Odd row -->
                                <tr class="bg-white">
                                    <td
                                        class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                        Purchase Request
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        1
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        17
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        613
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td
                                        class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                        Purchase Order
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        2
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        5
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        600
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td
                                        class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                        Voucher
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        10
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        15
                                    </td>
                                    <td class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                        623
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <main class="py-10">
            <div
                class="mt-8 max-w-7xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                    <!-- Description list-->
                    <section aria-labelledby="applicant-information-title">
                        <div class="bg-white  overflow-hidden shadow sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h2 id="applicant-information-title"
                                    class="text-lg leading-6 font-medium text-gray-900">
                                    In Progress Summary
                                </h2>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    List of In Progress Summary
                                </p>
                            </div>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Offices
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            PR
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            PO
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Voucher
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Total
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Odd row -->
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            MBO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <!-- Even row -->
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            MMO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            BAC
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            Procurement
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            Supplier
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            GSO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            MACCO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-gray-900">
                                                            MTO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-gray-500">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-500">
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm font-medium text-white">
                                                            Total
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-white">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-white">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-white">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 cursor-pointer whitespace-nowrap text-sm text-white">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <!-- More people... -->
                                                </tbody>
                                            </table>


                                            <livewire:sample />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                        <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Recent Activity</h2>

                        <!-- Activity Feed -->
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="flow-root mt-5">
                            <ul role="list" class="-mb-8">
                                <li>
                                    <div class="relative pb-8">
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
                                                    <p class="text-sm text-gray-500">Applied to <a href="#"
                                                            class="font-medium text-gray-900">Front End Developer</a>
                                                    </p>
                                                </div>
                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                    <time datetime="2020-09-20">Sep 20</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                            aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                                <span
                                                    class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/thumb-up -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-500">Advanced to phone screening by <a
                                                            href="#" class="font-medium text-gray-900">Bethany Blake</a>
                                                    </p>
                                                </div>
                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                    <time datetime="2020-09-22">Sep 22</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                            aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                                <span
                                                    class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-500">Completed phone screening with <a
                                                            href="#" class="font-medium text-gray-900">Martha
                                                            Gardner</a>
                                                    </p>
                                                </div>
                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                    <time datetime="2020-09-28">Sep 28</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                            aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                                <span
                                                    class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/thumb-up -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-500">Advanced to interview by <a
                                                            href="#" class="font-medium text-gray-900">Bethany Blake</a>
                                                    </p>
                                                </div>
                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                    <time datetime="2020-09-30">Sep 30</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="relative pb-8">
                                        <div class="relative flex space-x-3">
                                            <div>
                                                <span
                                                    class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-500">Completed interview with <a
                                                            href="#" class="font-medium text-gray-900">Katherine
                                                            Snyder</a></p>
                                                </div>
                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                    <time datetime="2020-10-04">Oct 4</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-6 flex flex-col justify-stretch">
                            <button type="button"
                                class="inline-flex  items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Scroll down to view more logs.
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
    <livewire:dashboard.dashboard-po-modal />
    <livewire:dashboard.dashboard-pr-modal />
    <livewire:dashboard.dashboard-voucher-modal />



</div>