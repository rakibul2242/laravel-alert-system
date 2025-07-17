<x-layouts.app :title="__('Dashboard')">
    <main>
        <div class="flex items-center justify-center flex-col p-6 bg-gray-100 dark:bg-gray-900 min-h-screen">
            <h1 class="text-2xl font-bold mb-2 text-center text-gray-900 dark:text-gray-100">Send Mail</h1>
            <p class="text-sm text-gray-600 mb-6 text-center dark:text-gray-300">
                Fill out the form below to send a test email
            </p>

            <livewire:send-mail />
        </div>
    </main>
</x-layouts.app>
