<?php

namespace App\Http\Controllers\Stores;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller {
    
    function index(){
        $products = Product::whereStatus(Status::ACTIVE)->paginate();
        $faqs = Faq::isActive()->get();
        return Inertia::render('Products/Index', compact('products', 'faqs'));
    }
    
    
    function show(Product $product){
        $faqs = Faq::isActive()->get();
        return Inertia::render('Products/Show', compact('product', 'faqs'));
    }

}
