<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class MapController extends Controller
{
    final public function yandex(): View
    {
    	return view('admin.map.yandex');
    }

    final public function jvector(): View
    {
        return view('admin.map.jvector');
    }
}
