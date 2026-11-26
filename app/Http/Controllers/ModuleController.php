<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ModuleController extends Controller
{
    public function index(): View
    {
        return view('modules');
    }
}
