<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class FormController extends Controller
{
    final public function basic(): View
    {
    	return view('admin.form.basic');
    }

    final public function advanced(): View
    {
    	return view('admin.form.advanced');
    }

    final public function examples(): View
    {
    	return view('admin.form.examples');
    }

    final public function validation(): View
    {
    	return view('admin.form.validation');
    }

    final public function wizard(): View
    {
    	return view('admin.form.wizard');
    }

    final public function editors(): View
    {
    	return view('admin.form.editors');
    }

    final public function upload(): View
    {
    	return view('admin.form.upload');
    }

    final public function summernote(): View
    {
    	return view('admin.form.summernote');
    }
}
