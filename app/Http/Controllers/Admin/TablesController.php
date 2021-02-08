<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class TablesController extends Controller
{
    final public function normal(): View
    {
    	return view('admin.tables.normal');
    }

    final public function datatable(): View
    {
    	return view('admin.tables.datatable');
    }

    final public function editable(): View
    {
    	return view('admin.tables.editable');
    }

    final public function footable(): View
    {
    	return view('admin.tables.footable');
    }

    final public function color(): View
    {
    	return view('admin.tables.color');
    }
}
