<?php

namespace App\Http\Controllers\Group;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller {
    
    function index(Request $request){
        return Inertia::render('Home/Index');
    }
    
    function about(Request $request){
        $jobs = Career::whereStatus(Status::ACTIVE)->get();
        return Inertia::render('About/Index', compact('jobs'));
    }

}
