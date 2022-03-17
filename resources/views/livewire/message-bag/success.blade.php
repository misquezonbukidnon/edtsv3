<div>
    <div class="p-4 rounded-md bg-green-50" x-data="{show: false}" x-data="{ show: false }" x-init="() => {
                    setTimeout(() => show = true, 500);
                    setTimeout(() => show = false, 5000);
                    }" x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
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
                        <li>{{ Session::get('successMessage') }}</li>
                        {{ Session::forget('successMessage') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
