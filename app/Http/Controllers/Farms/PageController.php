<?php

namespace App\Http\Controllers\Farms;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Process;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller {
    function index(Request $request){
        $faqs = Faq::isActive()->get();
        $testimonials = Testimonial::isActive()->limit(3)->get();
        $partners = Partner::isActive()->get();
        $processes = Process::isActive()->get();
        $categories = ProductCategory::isActive()
                            ->whereHas('products', function ($query) {
                                $query->limit(6)->isActive();
                            })
                            ->with(['products'])
                            ->limit(6)
                            ->latest()
                            ->get();
        
        $products = Product::isActive()->latest()->limit(6)->get();
        
        return Inertia::render('Home/Index', compact(['faqs', 'testimonials', 'categories', 'products', 'partners', 'processes']));
    }
}
