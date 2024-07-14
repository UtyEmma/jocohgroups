<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    
    function index(Request $request, Category $category = null) {
        $products = Product::isActive()
                        ->when($category, function($query, Category $category){
                            $query->whereCategoryId($category->id);
                        })
                        ->get();
        
        return response()->json(compact('products'));
    }

}
