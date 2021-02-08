<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ComponentsController extends Controller
{
    final public function ui(): View
    {
    	return view('admin.components.ui');
    }

    final public function alerts(): View
    {
    	return view('admin.components.alerts');
    }

    final public function collapse(): View
    {
    	return view('admin.components.collapse');
    }

    final public function colors(): View
    {
    	return view('admin.components.colors');
    }

    final public function dialogs(): View
    {
        return view('admin.components.dialogs');
    }

    final public function list(): View
    {
    	return view('admin.components.list');
    }

    final public function media(): View
    {
    	return view('admin.components.media');
    }

    final public function modals(): View
    {
    	return view('admin.components.modals');
    }

    final public function notifications(): View
    {
    	return view('admin.components.notifications');
    }

    final public function progressbars(): View
    {
    	return view('admin.components.progressbars');
    }

    final public function range(): View
    {
    	return view('admin.components.range');
    }

    final public function sortable(): View
    {
    	return view('admin.components.sortable');
    }

    final public function tabs(): View
    {
    	return view('admin.components.tabs');
    }

    final public function waves(): View
    {
    	return view('admin.components.waves');
    }
}
