<!DOCTYPE html>
<html>
<head>
    <title>Welcome Mail</title>
    <style>
        /* Include Tailwind's CDN for email compatibility */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css');
    </style>
</head>
<body class="bg-gray-50 font-sans text-gray-800 p-6">
    <div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-3xl font-bold mb-4 text-blue-700">Welcome, {{ $user->name }}!</h1>
        <p class="mb-4 text-gray-700">Thank you for joining us.</p>

        <div class="bg-gray-100 rounded p-4">
            <p class="font-semibold mb-2">Your Message:</p>
            <p class="text-gray-800 whitespace-pre-wrap">{{ $user->content }}</p>
        </div>
    </div>
</body>
</html>
