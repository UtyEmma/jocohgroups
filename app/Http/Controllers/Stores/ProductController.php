<?php

namespace App\Http\Controllers\Stores;

use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller {
    
    function index(){
        $products = Product::whereStatus(Status::ACTIVE)->paginate();
        return Inertia::render('Products/Index', compact('products'));
    }
    

    function show(Product $product){
        return Inertia::render('Products/Show', compact('product'));
    }

}
