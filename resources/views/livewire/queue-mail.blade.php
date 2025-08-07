<div class="w-xl mx-auto space-y-6 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md dark:shadow-none">
    <form wire:submit.prevent="sendMail" class="space-y-6">
        @if ($successMessage)
            <div class="text-green-800 bg-green-100 border border-green-300 rounded px-4 py-3 dark:text-green-300 dark:bg-green-900 dark:border-green-700"
                role="alert">
                {{ $successMessage }}
            </div>
        @endif

        <div>
            <label for="name" class="block text-gray-700 font-semibold mb-2 dark:text-gray-300">Name</label>
            <input id="name" type="text" wire:model.debounce.300ms="name" placeholder="Your full name"
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" />
            @error('name')
                <p class="text-red-600 text-sm mt-1 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-gray-700 font-semibold mb-2 dark:text-gray-300">Email</label>
            <input id="email" type="email" wire:model.debounce.300ms="email" placeholder="your.email@example.com"
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" />
            @error('email')
                <p class="text-red-600 text-sm mt-1 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="content" class="block text-gray-700 font-semibold mb-2 dark:text-gray-300">Message</label>
            <textarea id="content" wire:model.debounce.300ms="content" rows="5" placeholder="Write your message here..."
                class="w-full border border-gray-300 rounded-md px-4 py-2 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"></textarea>
            @error('content')
                <p class="text-red-600 text-sm mt-1 dark:text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" wire:loading.attr="disabled"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-md shadow-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Send Mail
            </button>

            <div wire:loading wire:target="sendMail" class="ml-4">
                <svg class="animate-spin h-6 w-6 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg>
            </div>
        </div>
    </form>
</div>
