<!DOCTYPE html>
<html>
<head>
    <title>Send Mail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body class="bg-gray-100 flex items-center h-screen justify-center">
    <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-2 text-center">Send Mail</h1>
        <p class="text-sm text-gray-600 mb-6 text-center">
            Fill out the form below to send a test email
        </p>

        <livewire:send-mail />
    </div>

    @livewireScripts
</body>
</html>
