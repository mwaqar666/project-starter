<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    final public function myProfile(): View
    {
    	return view('admin.profile.my-profile');
    }
}
