<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostCreated;

class PostController extends Controller
{
    public function index()
    {
        return view('user.post');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $post = Post::create($validated);

        event(new PostCreated($post));

        return redirect()->route('posts.index');
    }
}
