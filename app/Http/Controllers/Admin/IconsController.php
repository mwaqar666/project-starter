<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class IconsController extends Controller
{
    final public function material(): View
    {
    	return view('admin.icons.material');
    }

    final public function themify(): View
    {
    	return view('admin.icons.themify');
    }

    final public function weather(): View
    {
    	return view('admin.icons.weather');
    }
}
