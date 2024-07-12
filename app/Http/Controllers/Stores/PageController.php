<?php

namespace App\Http\Controllers\Stores;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller {
    
    function index(Request $request){
        $products = Product::isActive()->limit(6)->get();
        $faqs = Faq::isActive()->limit(5)->get();
        return Inertia::render('Home/Index', compact('products', 'faqs'));
    }
    
    function about(Request $request){
        $faqs = Faq::isActive()->get();
        return Inertia::render('About/Index', compact('faqs'));
    }
    
    function contact(Request $request){
        $faqs = Faq::isActive()->get();
        return Inertia::render('Contact/Index', compact('faqs'));
    }

}
