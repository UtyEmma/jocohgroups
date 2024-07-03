<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    
    function index(Request $request) {
        return Inertia::render('Blog/Index');
    }
    
    function show(Request $request) {
        return Inertia::render('Blog/Show');
    }
    
}
