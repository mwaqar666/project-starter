<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AuthenticationController extends Controller
{
    final public function login(): View
    {
    	return view('admin.authentication.login');
    }

    final public function register(): View
    {
    	return view('admin.authentication.register');
    }

    final public function lockscreen(): View
    {
        return view('admin.authentication.lockscreen');
    }

    final public function forgot(): View
    {
    	return view('admin.authentication.forgot');
    }

    final public function page404(): View
    {
    	return view('admin.authentication.page404');
    }

    final public function page500(): View
    {
        return view('admin.authentication.page500');
    }

    final public function offline(): View
    {
    	return view('admin.authentication.offline');
    }
}
