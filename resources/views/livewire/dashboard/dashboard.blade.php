<div x-data="{PO: false, PR: false, Voucher: false}">


    <div>
        <div class="pt-12 sm:pt-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Summary Overview
                    </h2>
                </div>
            </div>
            <div class="pb-12 mt-10 sm:pb-16">


                <div class="relative">
                    <div class="absolute inset-0 h-1/2 "></div>
                    <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="max-w-4xl mx-auto">
                            <dl class="bg-white rounded-lg shadow-lg sm:grid sm:grid-cols-3">
                                <div
                                    class="flex flex-col p-6 text-center border-b border-gray-100 sm:border-0 sm:border-r">
                                    <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                        In Progress
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-black">
                                        {{ $inProgress }}
                                    </dd>
                                </div>
                                <div
                                    class="flex flex-col p-6 text-center border-t border-b border-gray-100 sm:border-0 sm:border-l sm:border-r">
                                    <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                        Cancelled
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-black">
                                        {{ $cancelled }}
                                    </dd>
                                </div>
                                <div
                                    class="flex flex-col p-6 text-center border-t border-gray-100 sm:border-0 sm:border-l">
                                    <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                                        Completed
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-black">
                                        {{ $completed }}
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
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-7">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-2 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Documents
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        In Progress
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Cancelled
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Completed
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Odd row -->
                                <tr class="bg-white">
                                    <td
                                        class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                        Purchase Request
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        1
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        17
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        613
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td
                                        class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                        Purchase Order
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        2
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        5
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        600
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td
                                        class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                        Voucher
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        10
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                        15
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
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
                class="grid grid-cols-1 gap-6 mx-auto mt-8 max-w-7xl sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
                <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                    <!-- Description list-->
                    <section aria-labelledby="applicant-information-title">
                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <h2 id="applicant-information-title"
                                    class="text-lg font-medium leading-6 text-gray-900">
                                    In Progress Summary
                                </h2>
                                <p class="max-w-2xl mt-1 text-sm text-gray-500">
                                    List of In Progress Summary
                                </p>
                            </div>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Offices
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            PR
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            PO
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Voucher
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                            Total
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Odd row -->
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            MBO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <!-- Even row -->
                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            MMO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            BAC
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            Procurement
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            Supplier
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            GSO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            MACCO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-50">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-gray-900 cursor-pointer whitespace-nowrap">
                                                            MTO
                                                        </td>
                                                        <td @click="PR = ! PR"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="PO = ! PO"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td @click="Voucher = ! Voucher"
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-gray-500 cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <tr class="bg-gray-500">
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-white cursor-pointer whitespace-nowrap">
                                                            Total
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-white cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-white cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-white cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm text-white cursor-pointer whitespace-nowrap">
                                                            0
                                                        </td>
                                                    </tr>

                                                    <!-- More people... -->
                                                </tbody>
                                            </table>







                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                    <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:px-6">
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
                                                    class="flex items-center justify-center w-8 h-8 bg-gray-400 rounded-full ring-8 ring-white">
                                                    <!-- Heroicon name: solid/user -->
                                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
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
                                                <div class="text-sm text-right text-gray-500 whitespace-nowrap">
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
                                                    class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full ring-8 ring-white">
                                                    <!-- Heroicon name: solid/thumb-up -->
                                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-500">Advanced to phone screening by <a
                                                            href="#" class="font-medium text-gray-900">Bethany
                                                            Blake</a>
                                                    </p>
                                                </div>
                                                <div class="text-sm text-right text-gray-500 whitespace-nowrap">
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
                                                    class="flex items-center justify-center w-8 h-8 bg-green-500 rounded-full ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
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
                                                <div class="text-sm text-right text-gray-500 whitespace-nowrap">
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
                                                    class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full ring-8 ring-white">
                                                    <!-- Heroicon name: solid/thumb-up -->
                                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-500">Advanced to interview by <a
                                                            href="#" class="font-medium text-gray-900">Bethany
                                                            Blake</a>
                                                    </p>
                                                </div>
                                                <div class="text-sm text-right text-gray-500 whitespace-nowrap">
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
                                                    class="flex items-center justify-center w-8 h-8 bg-green-500 rounded-full ring-8 ring-white">
                                                    <!-- Heroicon name: solid/check -->
                                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
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
                                                <div class="text-sm text-right text-gray-500 whitespace-nowrap">
                                                    <time datetime="2020-10-04">Oct 4</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="flex flex-col mt-6 justify-stretch">
                            <button type="button"
                                class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
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
