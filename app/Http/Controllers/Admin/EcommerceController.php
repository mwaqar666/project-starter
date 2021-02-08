<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class EcommerceController extends Controller
{
    final public function dashboard(): View
    {
    	return view('admin.ecommerce.dashboard');
    }

    final public function product(): View
    {
    	return view('admin.ecommerce.product');
    }

    final public function productList(): View
    {
        return view('admin.ecommerce.product-list');
    }

    final public function productDetail(): View
    {
    	return view('admin.ecommerce.product-detail');
    }
}
