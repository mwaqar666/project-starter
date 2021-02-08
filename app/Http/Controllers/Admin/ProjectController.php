<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ProjectController extends Controller
{
    final public function projectList(): View
    {
    	return view('admin.project.project-list');
    }

    final public function taskboard(): View
    {
    	return view('admin.project.taskboard');
    }

    final public function ticketList(): View
    {
    	return view('admin.project.ticket-list');
    }

    final public function ticketDetail(): View
    {
    	return view('admin.project.ticket-detail');
    }
}
