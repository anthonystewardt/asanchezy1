<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(9);
        return view('blog.index', compact('posts'));
    }

    public function show(Request $request, Post $post)
    {
        // read request uri
        // dd($request->path());
        $path = $request->path();
        // apply split to get the last part of the uri
        $slug = explode('/', $path);
        $post = Post::where('slug', end($slug))->firstOrFail();
        // get 3 posts random
        $randomPosts = Post::where('id', '!=', $post->id)->inRandomOrder()->limit(3)->get();

        return view('blog.show', compact('post', 'randomPosts'));
    }
}
