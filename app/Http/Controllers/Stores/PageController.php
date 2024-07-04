<?php

namespace App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller {
    
    function index(Request $request){
        return Inertia::render('Home/Index');
    }
    
    function about(Request $request){
        return Inertia::render('About/Index');
    }
    
    function contact(Request $request){
        return Inertia::render('Contact/Index');
    }

}
