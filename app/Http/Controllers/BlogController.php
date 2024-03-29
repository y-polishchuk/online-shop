<?php

namespace App\Http\Controllers;

use App\Models\Admin\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::translatedIn(app()->getLocale())
        ->latest()
        ->get();

        // return response()->json($posts);
        return view('pages.blog', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('pages.blog_single', compact('post'));
    }
}
