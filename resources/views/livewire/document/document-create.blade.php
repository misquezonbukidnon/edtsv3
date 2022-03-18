<div x-data="{ count: 0 }">
    <div class="mx-auto mt-5 max-w-7xl sm:px-6 lg:px-8">
        <nav class="flex " aria-label="Breadcrumb">
            <ol role="list" class="flex px-6 space-x-4 bg-white rounded-md shadow">
                <li class="flex">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500">

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
                            class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Create Document</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <div x-cloak class="mx-auto mt-5 mb-16 max-w-7xl sm:px-6 lg:px-8">

        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Registration
                </h3>
                <p class="max-w-2xl mt-1 text-sm text-gray-500">
                    Details
                </p>
            </div>
            @if (session()->has('errorMessage'))
            <livewire:message-bag.error />
            @endif
            @if (session()->has('successMessage'))
            <livewire:message-bag.success />
            @endif
            <div class="px-4 py-5 border-t border-gray-200 sm:p-0">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form onsubmit="return false" wire:submit.prevent="formSubmit">
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">

                                    <div class="col-span-2 sm:col-span-2">
                                        <label for="date_of_entry" class="block text-sm font-medium text-gray-700">Date
                                            of
                                            Entry</label>
                                        <input type="date" wire:model="date_of_entry" id="dateofentry"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('date_of_entry') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                        @error('date_of_entry')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-6">
                                        <div>

                                            <fieldset class="mt-4">

                                                <div
                                                    class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                    <div class="flex items-center">
                                                        <input @click="count = 1" id="email"
                                                            wire:model="process_type_id" value="1"
                                                            name="notification-method" type="radio"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                        <label for="email"
                                                            class="block ml-3 text-sm font-medium text-gray-700">
                                                            Purchase Request
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center">
                                                        <input id="sms" @click="count = 2" wire:model="process_type_id"
                                                            value="2" name="notification-method" type="radio"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                        <label for="sms"
                                                            class="block ml-3 text-sm font-medium text-gray-700">
                                                            Purchase Order
                                                        </label>
                                                    </div>

                                                    <div class="flex items-center" @click="count = 3">
                                                        <input @click="count = 3" id="push" wire:model="process_type_id"
                                                            value="3" name="notification-method" type="radio"
                                                            class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                                        <label for="push"
                                                            class="block ml-3 text-sm font-medium text-gray-700">
                                                            Voucher
                                                        </label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                </div>



                                <div class="pt-8">
                                    <div class="hidden sm:block" aria-hidden="true">
                                        <div class="pb-4">
                                            <div class="border-t border-gray-200"></div>
                                        </div>
                                    </div>

                                    <div x-show="count === 1">
                                        <h1>Purchase Request</h1>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Purchase Request Details
                                        </p>
                                    </div>

                                    <div x-show="count === 2">
                                        <h1>Purchase Order</h1>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Purchase Order Details
                                        </p>
                                    </div>

                                    <div x-show="count === 3">
                                        <h1>Voucher</h1>
                                        <p class="mt-1 text-sm text-gray-500">
                                            Voucher Details
                                        </p>
                                    </div>


                                    <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6"
                                        x-show="count === 1">
                                        <div class="sm:col-span-6">
                                            <label for="office" class="block text-sm font-medium text-gray-700">
                                                Office
                                            </label>
                                            <div class="mt-1">
                                                <select id="office" name="office_id" wire:model="office_id"
                                                    autocomplete="office-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('office_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Click to Select</option>
                                                    @foreach ($office as $office)
                                                    <option value="{{ $office->id }}">{{ $office->abbr }} -
                                                        {{ $office->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('office_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Select Fund Type.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <select id="Fund" wire:model="fund" autocomplete="Fund-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('fund') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Fund</option>
                                                    <option value="GF">General Fund</option>
                                                    <option value="TF">Trust Fund</option>
                                                    <option value="SEF">Special Education Fund</option>
                                                </select>
                                            </div>
                                            @error('fund')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="sm:col-span-4">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" wire:model="reference_id" id="reference_id"
                                                    autocomplete="reference_id"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('reference_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('reference_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                                Particulars
                                            </label>
                                            <div class="mt-1">
                                                <select id="Particulars" wire:model="purchase_description_id"
                                                    autocomplete="Particulars-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Click to Select</option>
                                                    @foreach ($purchase_description as $particulars)
                                                    <option value="{{ $particulars->id }}">
                                                        {{ $particulars->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('purchase_description_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="purpose" class="block text-sm font-medium text-gray-700">
                                                Purpose
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" wire:model="description" id="purpose"
                                                    autocomplete="purpose" placeholder="Purchase Request Purpose"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('description')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="budget" class="block text-sm font-medium text-gray-700">
                                                Approved Budget for the Contract
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" wire:model="abc_amount" id="budget"
                                                    autocomplete="budget" placeholder="Please enter the amount"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('abc_amount') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('abc_amount')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6"
                                        x-show="count === 2">

                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Select Transaction Type.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <select id="transactionType" wire:model="transaction_type"
                                                    autocomplete="transactionType"
                                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="PO">Purchase Order</option>
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
                                                <input type="text" wire:model="reference_id" id="reference_id"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('reference_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('reference_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Sub Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" wire:model="sub_reference_id_purchase_order"
                                                    id="sub_reference_id_purchase_order"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('sub_reference_id_purchase_order') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('sub_reference_id_purchase_order')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="Canvasser" class="block text-sm font-medium text-gray-700">
                                                Canvasser
                                            </label>
                                            <div class="mt-1">
                                                <select id="Canvasser" wire:model="canvasser_id"
                                                    autocomplete="Canvasser-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('canvasser_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Canvasser</option>
                                                    @foreach ($canvasser as $canvasser)
                                                    <option value="{{ $canvasser->id }}">
                                                        {{ $canvasser->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('canvasser_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="office" class="block text-sm font-medium text-gray-700">
                                                Office
                                            </label>
                                            <div class="mt-1">
                                                <select id="office" wire:model="office_id" autocomplete="office-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('office_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Office</option>
                                                    @foreach ($office_voucher as $office)
                                                    <option value="{{ $office->id }}">{{ $office->abbr }} -
                                                        {{ $office->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('office_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                                Particulars
                                            </label>
                                            <div class="mt-1">
                                                <select id="Particulars" wire:model="purchase_description_id"
                                                    autocomplete="Particulars-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Particulars</option>
                                                    @foreach ($purchase_description_po as $particulars)
                                                    <option value="{{ $particulars->id }}">
                                                        {{ $particulars->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('purchase_description_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="purpose" class="block text-sm font-medium text-gray-700">
                                                Purpose
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" wire:model="description" id="purpose"
                                                    autocomplete="purpose" placeholder="Purchase Request Purpose"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('description')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="contract-price" class="block text-sm font-medium text-gray-700">
                                                Contract Price
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" wire:model="lcb_amount" id="contract-price"
                                                    autocomplete="contract-price" placeholder="Enter Contract Price"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('lcb_amount') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('lcb_amount')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="supplier" class="block text-sm font-medium text-gray-700">
                                                Supplier
                                            </label>
                                            <div class="mt-1">
                                                <select id="supplier" wire:model="supplier_id"
                                                    autocomplete="supplier-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Supplier</option>
                                                    @foreach ($supplier as $supplier)
                                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('supplier_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6"
                                        x-show="count === 3">
                                        <div class="sm:col-span-6">
                                            <label for="voucherreferenceno"
                                                class="block text-sm font-medium text-gray-700">
                                                Voucher Reference No.
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" wire:model="reference_id" id="reference_id"
                                                    autocomplete="reference_id"
                                                    placeholder="Emter Voucher Reference No."
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('reference_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('reference_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-2">
                                            <div>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Sub Reference No.
                                                </p>
                                            </div>

                                            <div class="mt-1">
                                                <input type="text" wire:model="sub_reference_id_voucher"
                                                    id="sub_reference_id"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('sub_reference_id_voucher') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('sub_reference_id_voucher')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="office" class="block text-sm font-medium text-gray-700">
                                                Office
                                            </label>
                                            <div class="mt-1">
                                                <select id="office" wire:model="office_id" autocomplete="office-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('office_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Office</option>
                                                    @foreach ($office_voucher as $office)
                                                    <option value="{{ $office->id }}">{{ $office->abbr }} -
                                                        {{ $office->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('office_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="Particulars" class="block text-sm font-medium text-gray-700">
                                                Particulars
                                            </label>
                                            <div class="mt-1">
                                                <select id="Particulars" wire:model="purchase_description_id"
                                                    autocomplete="Particulars-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Particulars</option>
                                                    @foreach ($purchase_description_voucher as $particulars)
                                                    <option value="{{ $particulars->id }}">
                                                        {{ $particulars->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('purchase_description_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="purpose" class="block text-sm font-medium text-gray-700">
                                                Purpose
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" wire:model="description" id="purpose"
                                                    autocomplete="purpose" placeholder="Purchase Request Purpose"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('description') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('description')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="contract-price" class="block text-sm font-medium text-gray-700">
                                                Contract Price
                                            </label>
                                            <div class="mt-1">
                                                <input type="text" wire:model="lcb_amount" id="contract-price"
                                                    autocomplete="contract-price" placeholder="Enter Contract Price"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('lcb_amount') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                            </div>
                                            @error('lcb_amount')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-6">
                                            <label for="supplier" class="block text-sm font-medium text-gray-700">
                                                Payee
                                            </label>
                                            <div class="mt-1">
                                                <select id="supplier" wire:model="supplier_id"
                                                    autocomplete="supplier-name"
                                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md @error('purchase_description_id') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror">
                                                    <option>Select Supplier</option>
                                                    @foreach ($supplier_voucher as $supplier)
                                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('supplier_id')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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


        <div class="flex flex-col ">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="p-5 overflow-hidden border-b border-gray-100 shadow sm:rounded-lg">
                        <livewire:document.tailwind-table />
                    </div>
                </div>
            </div>
        </div>
    </div>