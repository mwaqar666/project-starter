<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ChartController extends Controller
{
    final public function echarts(): View
    {
    	return view('admin.chart.echarts');
    }

    final public function c3(): View
    {
    	return view('admin.chart.c3');
    }

    final public function morris(): View
    {
    	return view('admin.chart.morris');
    }

    final public function flot(): View
    {
    	return view('admin.chart.flot');
    }

    final public function chartjs(): View
    {
    	return view('admin.chart.chartjs');
    }

    final public function sparkline(): View
    {
    	return view('admin.chart.sparkline');
    }

    final public function knob(): View
    {
    	return view('admin.chart.knob');
    }
}
