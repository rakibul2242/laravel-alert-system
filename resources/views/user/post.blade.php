<x-layouts.app :title="__('Create Post')">
  <main class="bg-slate-900 min-h-screen flex items-center justify-center p-6 font-sans text-slate-100">
    <div class="w-full max-w-md bg-slate-800 rounded-lg shadow-xl p-8">
      <h1 class="text-4xl font-extrabold mb-8 text-emerald-400 text-center tracking-wide">Create Post</h1>

      <form id="create-post-form" class="space-y-8">
        @csrf

        <div>
          <label for="title" class="block mb-3 font-semibold text-emerald-300 text-lg">Title</label>
          <input type="text" id="title" name="title" required placeholder="Enter post title" class="w-full rounded-md border border-emerald-600 bg-slate-900 px-5 py-3 text-slate-100 placeholder-slate-500
                   focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400 focus:outline-none transition" />
        </div>

        <div>
          <label for="body" class="block mb-3 font-semibold text-emerald-300 text-lg">Body</label>
          <textarea id="body" name="body" required rows="6" placeholder="Write your post here..."
            class="w-full rounded-md border border-emerald-600 bg-slate-900 px-5 py-3 text-slate-100 placeholder-slate-500
                   focus:border-emerald-400 focus:ring-2 focus:ring-emerald-400 focus:outline-none transition resize-none"></textarea>
        </div>

        <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 transition rounded-md py-4 font-semibold text-slate-100
                 shadow-lg focus:outline-none focus:ring-4 focus:ring-emerald-400">
          Create Post
        </button>
      </form>
    </div>
  </main>

  <script>
    document.getElementById('create-post-form').addEventListener('submit', async function (e) {
      e.preventDefault();

      let formData = new FormData(this);

      let response = await fetch("{{ route('posts.store') }}", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        body: formData
      });

      if (response.ok) {
        this.reset();
      } else {
        console.error("Error creating post");
      }
    });
  </script>
</x-layouts.app>