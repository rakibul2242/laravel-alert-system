<div class="max-w-md mx-auto mt-10 p-4 bg-white shadow rounded">
    <h2 class="text-xl font-bold mb-4">Send Notification to User</h2>

    <input type="email" wire:model.defer="email" class="w-full p-2 border rounded mb-3" placeholder="Enter user email">

    <button wire:click="send" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Send Notification
    </button>

    @if (session()->has('success'))
        <div class="text-green-600 mt-4">{{ session('success') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="text-red-600 mt-4">{{ session('error') }}</div>
    @endif
</div>
