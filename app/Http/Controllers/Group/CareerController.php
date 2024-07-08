<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CareerController extends Controller {
    

    function index(Request $request, Career $career) {
        return Inertia::render('Careers/Index', [
            'job' => $career
        ]);
    }

}
