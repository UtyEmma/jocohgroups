<?php

namespace App\Http\Controllers\Farms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    function index(Request $request){
        return Inertia::render('Home/Index');
    }
}
