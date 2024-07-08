<?php

namespace App\Http\Controllers\Group;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller {
    
    function index(Request $request){
        $posts = Post::whereStatus(Status::ACTIVE)->latest()->limit(3)->get();
        $team = Team::whereStatus(Status::ACTIVE)->limit(3)->get();
        return Inertia::render('Home/Index', compact('posts', 'team'));
    }
    
    function about(Request $request){
        $jobs = Career::whereStatus(Status::ACTIVE)->get();
        return Inertia::render('About/Index', compact('jobs'));
    }

}
