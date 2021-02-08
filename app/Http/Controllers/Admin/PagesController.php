<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PagesController extends Controller
{
    final public function blank(): View
    {
    	return view('admin.pages.blank');
    }

    final public function gallery(): View
    {
    	return view('admin.pages.gallery');
    }

    final public function invoices1(): View
    {
        return view('admin.pages.invoices1');
    }

    final public function invoices2(): View
    {
        return view('admin.pages.invoices2');
    }

    final public function pricing(): View
    {
        return view('admin.pages.pricing');
    }

    final public function profile(): View
    {
        return view('admin.pages.profile');
    }

    final public function search(): View
    {
        return view('admin.pages.search');
    }

    final public function timeline(): View
    {
    	return view('admin.pages.timeline');
    }
}
