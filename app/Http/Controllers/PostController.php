<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return Inertia::render('Posts/Show', [
            'post' => $post,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function store()
    {
        $attributes = $this->validateRequest();

        $post = Post::create($attributes);

        return redirect($post->path());
    }

    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'sometimes',
            'body' => 'required',
            'category' => 'required',
            'published_at' => 'sometimes',
        ]);
    }
}
