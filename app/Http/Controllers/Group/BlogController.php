<?php

namespace App\Http\Controllers\Group;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    
    function index(Request $request) {
        $posts = Post::whereStatus(Status::ACTIVE)->latest()->get();
        return Inertia::render('Blog/Index', compact('posts'));
    }
    
    function show(Request $request, Post $post) {
        return Inertia::render('Blog/Show', compact('post'));
    }
    
}
