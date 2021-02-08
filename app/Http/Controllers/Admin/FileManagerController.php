<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class FileManagerController extends Controller
{
    final public function all(): View
    {
    	return view('admin.file-manager.all');
    }

    final public function documents(): View
    {
    	return view('admin.file-manager.documents');
    }

    final public function media(): View
    {
        return view('admin.file-manager.media');
    }

    final public function image(): View
    {
    	return view('admin.file-manager.image');
    }
}
