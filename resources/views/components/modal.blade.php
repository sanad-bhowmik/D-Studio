<!-- resources/views/components/modal.blade.php -->
<div x-data="{ open: false }">
    <!-- Trigger Button -->
    <button @click="open = true" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">
        Open Modal
    </button>

    <!-- Modal -->
    <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform scale-90"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
            <!-- Modal Header -->
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold">{{ $title }}</h2>
                <button @click="open = false" class="text-gray-600 hover:text-gray-900">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="mt-4">
                {{ $slot }}
            </div>

            <!-- Modal Footer -->
            <div class="mt-4 flex justify-end">
                <button @click="open = false"
                        class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-700">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
