<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'posts' => Post::where('category', 'work')->orderBy('published_at', 'desc')->get(),
        'projects' => Project::all(),
    ]);
});
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/resume', function () {
    return Inertia::render('Resume');
});
