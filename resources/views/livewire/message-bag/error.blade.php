<div>
    <div class="p-4 rounded-md bg-red-50" x-data="{show: false}" x-data="{ show: false }" x-init="() => {
                setTimeout(() => show = true, 500);
                setTimeout(() => show = false, 5000);
                }" x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90" style="display: none;">
        <div class="flex">
            <div class="flex-shrink-0">

                <a href="{{ $notification_error = false }}"><svg class="w-5 h-5 text-red-400"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg></a>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-red-800">There were errors with your submission</h3>
                <div class="mt-2 text-sm text-red-700">
                    <ul role="list" class="pl-5 space-y-1 list-disc">
                        <li>Notification
                            Reference number does not exist.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
