<!-- This example requires Tailwind CSS v2.0+ -->
<div wire:ignore>
    <!-- Nav Bar Section -->
    <div class="mx-auto my-5 max-w-8xl sm:px-6 lg:px-8">
        <nav class="flex " aria-label="Breadcrumb">
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
                        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44"
                            preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                        </svg>
                        <a href="{{ route('create-document') }}"
                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Document</a>
                    </div>
                </li>
                <li class="flex">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44"
                            preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                        </svg>
                        <a class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Edit</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>


    <!-- Data Viewing Section -->
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div class="max-w-8xl sm:pl-6 lg:pl-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Information
                    </h3>

                </div>
                <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Date of Entry
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $date_of_entry }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Reference No.
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $reference_id }}
                            </dd>
                        </div>
                        @if ($process_type_id == 2)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Sub Reference No.
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $sub_reference_id }}
                            </dd>
                        </div>
                        @endif
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Office
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $office_name }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Description
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $description }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Payee
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $supplier_name }}
                            </dd>
                        </div>
                        @if ($process_type_id == 2)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Supplier
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $supplier_name }}
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Supplier Address
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $supplier_address }}
                            </dd>
                        </div>
                        @endif
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Particulars
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{ $purchase_description_name }}
                            </dd>
                        </div>

                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Current Document Holder
                            </dt>
                            <div>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{ $canvasser_id }}
                                </dd>
                            </div>
                        </div>
                        @if ($process_type_id != 2)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Approved Budget for the Contract (ABC)
                            </dt>
                            <div>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    ₱ {{ $abc_amount }}
                                </dd>

                            </div>
                        </div>
                        @endif
                        @if ($process_type_id == 2)
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Approved Budget for the Contract (LCB)
                            </dt>
                            <div>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    ₱ {{ $lcb_amount }}
                                </dd>

                            </div>
                        </div>
                        @endif
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                Status
                            </dt>
                            <div>
                                <dd class="mt-1 text-green-700 text-m text-bold sm:mt-0 sm:col-span-2">
                                    {{ $document_process_status_id }}
                                </dd>

                            </div>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <h3 class="color-"></h3>
                        </div>
                    </dl>
                </div>
            </div>
        </div>


        <!-- Editing Section -->
        <div wire:ignore class="max-w-8xl sm:pr-6 lg:pr-8">
            @if (session()->has('errorMessage'))
            <div class="p-4 rounded-md bg-red-50" x-data="{show: false}" x-data="{ show: false }" x-init="() => {
                setTimeout(() => show = true, 500);
                setTimeout(() => show = false, 20000);
                }" x-show="show" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" style="display: none;">
                <div class="flex">
                    <div class="flex-shrink-0">

                        <a href="{{ $notification_error = false }}"><svg class="w-5 h-5 text-red-400"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd" />
                            </svg></a>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">There were errors with your submission</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul role="list" class="pl-5 space-y-1 list-disc">
                                <li>{{ session()->get('errorMessage') }}
                                    {{ session()->forget('errorMessage') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (session()->has('successMessage'))
            <div class="p-4 rounded-md bg-green-50" x-data="{show: false}" x-data="{ show: false }" x-init="() => {
                setTimeout(() => show = true, 500);
                setTimeout(() => show = false, 20000);
                }" x-show="show" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" style="display: none;">
                <div class="flex">
                    <div class="flex-shrink-0">

                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Success!</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>
                                <li>{{ session()->get('successMessage') }}
                                    {{ session()->forget('successMessage') }}</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if (session()->has('updatedMessage'))
            <div class="p-4 mb-3 rounded-md bg-green-50" x-data="{show: false}" x-data="{ show: false }" x-init="() => {
                setTimeout(() => show = true, 500);
                setTimeout(() => show = false, 5000);
                }" x-show="show" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90" style="display: none;">
                <div class="flex">
                    <div class="flex-shrink-0">

                        <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-green-800">Updated!</h3>
                        <div class="mt-2 text-sm text-green-700">
                            <p>
                                <li>{{ session()->get('updatedMessage') }}
                                    {{ session()->forget('updatedMessage') }}</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <form wire:submit.prevent="submitForm">
                <!-- PURCHASE REQUEST -->
                @if ($process_type_id == 1)
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Purchase Request
                        </h3>

                    </div>
                    <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <div>
                                        <p class="text-sm text-gray-500 ">
                                            Reference No.
                                        </p>
                                    </div>

                                    <div class="mt-1">
                                        <input id="pr_reference_id" wire:model="pr_reference_id" type="text"
                                            name="pr_reference_id" autocomplete="pr_reference_id"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="office" class="block text-sm font-medium text-gray-700">
                                        Office
                                    </label>
                                    <div class="mt-1">
                                        <select id="pr_office" wire:model="pr_office_id_submit"
                                            autocomplete="pr_office_id"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('office_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            <option value="{{ $pr_office_id }}">{{ $pr_office_abbr }} -
                                                {{ $pr_office_name }}
                                            </option>
                                            @foreach ($pr_office as $office)
                                            @if ($pr_office_name != $office->name)
                                            <option wire:key="{{ $office->id }}" @click="dd($office_id_submit)"
                                                value="{{ $office->id }}">
                                                {{ $pr_office_abbr }} - {{ $office->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-4">
                                    <label for="purpose" class="block text-sm font-medium text-gray-700">
                                        Purpose
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="pr_description" name="purpose" id="purpose"
                                            autocomplete="purpose" placeholder="Purchase Request Purpose"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                        Particulars
                                    </label>
                                    <div class="mt-1">
                                        <select id="Particulars" wire:model="pr_purchase_description_id_submit"
                                            autocomplete="Particulars-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            <option value="{{ $pr_purchase_description_id }}">
                                                {{ $pr_purchase_description_name }}
                                                @foreach ($pr_purchase_description_particulars as $particulars)
                                                @if ($pr_purchase_description_name != $particulars->name)
                                            <option value="{{ $particulars->id }}">{{ $particulars->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="budget" class="block text-sm font-medium text-gray-700">
                                        Approved Budget for the Contract
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="pr_abc_amount" name="budget" id="budget"
                                            autocomplete="budget" placeholder="Please enter the amount"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                @endif


                <!-- PURCHASE ORDER -->
                @if ($process_type_id == 2)
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Purchase Order
                        </h3>

                    </div>
                    <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">

                                <div class="sm:col-span-3">
                                    <div>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Purchase Order Reference No.
                                        </p>
                                    </div>

                                    <div class="mt-1">
                                        <input wire:model="po_reference_id" type="text" name="po_reference_id"
                                            id="po_reference_id" autocomplete="po_reference_id"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <div>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Document Reference No.
                                        </p>
                                    </div>

                                    <div class="mt-1">
                                        <input type="text" wire:model="po_sub_reference_id" name="po_sub_reference_id"
                                            id="po_sub_reference_id" autocomplete="po_sub_reference_id"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="office" class="block text-sm font-medium text-gray-700">
                                        Office
                                    </label>
                                    <div class="mt-1">
                                        <select id="po_office_id_submit" wire:model="po_office_id_submit"
                                            autocomplete="po_office_id"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('office_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            <option value="{{ $po_office_id }}">{{ $po_office_abbr }} -
                                                {{ $po_office_name }}
                                            </option>
                                            @foreach ($po_office as $office)
                                            @if ($po_office_name != $office->name)
                                            <option value="{{ $office->id }}">{{ $office->abbr }} -
                                                {{ $office->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                        Particulars
                                    </label>
                                    <div class="mt-1">
                                        <select id="po_purchase_description_id_submit"
                                            wire:model="po_purchase_description_id_submit"
                                            autocomplete="Particulars-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            <option value="$purchase_description_id">{{ $po_purchase_description_name }}
                                                @foreach ($po_purchase_description_particulars as $particulars)
                                                @if ($po_purchase_description_name != $particulars->name)
                                            <option value="{{ $particulars->id }}">{{ $particulars->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="sm:col-span-6">
                                    <label for="purpose" class="block text-sm font-medium text-gray-700">
                                        Purpose
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="po_description" name="po_description"
                                            id="po_description" autocomplete="purpose"
                                            placeholder="Purchase Request Purpose"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="contract-price" class="block text-sm font-medium text-gray-700">
                                        Contract Price
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="po_lcb_amount" name="po_lcb_amount"
                                            id="po_lcb_amount" autocomplete="po_lcb_amount"
                                            placeholder="Enter Contract Price"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="supplier" class="block text-sm font-medium text-gray-700">
                                        Supplier
                                    </label>
                                    <div class="mt-1">
                                        <select id="suppliers" wire:model="po_supplier_id_submit" name="suppliers"
                                            autocomplete="suppliers"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="{{ $po_supplier_id }}">{{ $po_supplier_name }}</option>
                                            @foreach ($po_suppliers as $suppliers)
                                            @if ($suppliers->name != $po_supplier_name)
                                            <option value="{{ $suppliers->id }}"> {{ $suppliers->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- VOUCHER -->
                @if ($process_type_id == 3)
                <div class="overflow-hidden bg-white shadow sm:rounded-lg ">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Voucher
                        </h3>

                    </div>
                    <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label for="voucherreferenceno" class="block text-sm font-medium text-gray-700">
                                        Voucher Reference No.
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="voucher_reference_id" name="voucher_reference_id"
                                            id="voucher_reference_id" autocomplete="voucher_reference_id"
                                            placeholder="Emter Voucher Reference No."
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>


                                <div class="sm:col-span-6">
                                    <div>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Sub Reference No.
                                        </p>
                                    </div>

                                    <div class="mt-1">
                                        <input type="text" wire:model="voucher_sub_reference_id"
                                            name="voucher_sub_reference_id" id="voucher_sub_reference_id"
                                            autocomplete="voucher_sub_reference_id"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="office" class="block text-sm font-medium text-gray-700">
                                        Office Concern
                                    </label>
                                    <div class="mt-1">
                                        <select id="voucher_office_id_submit" wire:model="voucher_office_id_submit"
                                            autocomplete="voucher_office_id_submit"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('office_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            <option value="{{ $voucher_office_id }}">{{ $voucher_office_abbr }} -
                                                {{ $voucher_office_name }}
                                            </option>
                                            @foreach ($voucher_office as $office)
                                            @if ($voucher_office_name != $office->name)
                                            <option value="{{ $office->id }}">{{ $office->abbr }} -
                                                {{ $office->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                        Particulars
                                    </label>
                                    <div class="mt-1">
                                        <select id="Particulars" wire:model="voucher_purchase_description_id_submit"
                                            autocomplete="Particulars-name"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            <option value="$voucher_purchase_description_id">
                                                {{ $voucher_purchase_description_name }}
                                                @foreach ($voucher_purchase_description_particulars as $particulars)
                                                @if ($voucher_purchase_description_name != $particulars->name)
                                            <option value="{{ $particulars->id }}">{{ $particulars->name }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="purpose" class="block text-sm font-medium text-gray-700">
                                        Purpose
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="voucher_purchase_description" name="purpose"
                                            id="purpose" autocomplete="purpose" placeholder="Purchase Request Purpose"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>



                                <div wire:ignore.self class="sm:col-span-6">
                                    <label for="payee" class="block text-sm font-medium text-gray-700">
                                        Payee
                                    </label>
                                    <div class="mt-1">
                                        <select id="suppliers" wire:model="voucher_payee_id_submit" name="suppliers"
                                            autocomplete="suppliers"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="{{ $voucher_payee_id }}">{{ $voucher_payee_name }}</option>
                                            @foreach ($voucher_payee as $suppliers)
                                            @if ($suppliers->name != $voucher_payee_name)
                                            <option value="{{ $suppliers->id }}"> {{ $suppliers->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="sm:col-span-6">
                                    <label for="amount" class="block text-sm font-medium text-gray-700">
                                        Amount
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" wire:model="voucher_abc_amount" name="amount" id="amount"
                                            autocomplete="amount" placeholder="Enter Amount"
                                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button type="submit" wire:click="$refresh"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>