<?php

namespace App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller {
    
    function index(Request $request){
        $products = Product::isActive()->limit(6)->get();
        return Inertia::render('Home/Index', compact('products'));
    }
    
    function about(Request $request){
        return Inertia::render('About/Index');
    }
    
    function contact(Request $request){
        return Inertia::render('Contact/Index');
    }

}
