<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class WidgetsController extends Controller
{
    final public function app(): View
    {
    	return view('admin.widgets.app');
    }

    final public function data(): View
    {
    	return view('admin.widgets.data');
    }
}
