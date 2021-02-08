<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AppController extends Controller
{
    final public function inbox(): View
    {
    	return view('admin.app.inbox');
    }

    final public function compose(): View
    {
    	return view('admin.app.compose');
    }

    final public function single(): View
    {
    	return view('admin.app.single');
    }

    final public function chat(): View
    {
    	return view('admin.app.chat');
    }

    final public function calendar(): View
    {
        return view('admin.app.calendar');
    }

    final public function contactList(): View
    {
    	return view('admin.app.contact-list');
    }
}
