<!DOCTYPE html>
<html lang="en" class="bg-slate-900 text-slate-100">
<head>
  <meta charset="UTF-8" />
  <title>Live Posts with Tailwind</title>
  <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen p-6 flex flex-col items-center">
  <h1 class="text-4xl font-extrabold text-emerald-400 mb-8">Live Posts</h1>

  <div id="posts" class="w-full max-w-lg space-y-4"></div>

  <script>
    Pusher.logToConsole = true;

    const pusher = new Pusher('18612b3d1abebe11ea60', {
      cluster: 'mt1'
    });

    const channel = pusher.subscribe('my-channel');
    channel.bind('post-created', function(data) {
      const postsDiv = document.getElementById('posts');

      const postEl = document.createElement('div');
      postEl.className = 'bg-slate-800 p-5 rounded-lg shadow-md border border-emerald-600 hover:border-emerald-400 transition';

      postEl.innerHTML = `
        <h2 class="text-2xl font-semibold text-emerald-400 mb-2">${data.title}</h2>
        <p class="text-slate-300 whitespace-pre-wrap">${data.body}</p>
      `;

      postsDiv.prepend(postEl);
    });
  </script>
</body>
</html>
