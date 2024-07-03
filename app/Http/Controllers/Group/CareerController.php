<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CareerController extends Controller {
    

    function index(Request $request) {
        return Inertia::render('Careers/Index');
    }

}
