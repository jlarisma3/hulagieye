<?php

namespace App\Http\Controllers\Live;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
        return Inertia::render('Live/Index');
    }
}
