<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    final public function dashboard(): View
    {
    	return view('admin.blog.dashboard');
    }

    final public function newPost(): View
    {
    	return view('admin.blog.new-post');
    }

    final public function list(): View
    {
        return view('admin.blog.list');
    }

    final public function grid(): View
    {
        return view('admin.blog.grid');
    }

    final public function detail(): View
    {
    	return view('admin.blog.detail');
    }
}
