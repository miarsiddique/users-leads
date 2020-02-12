<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Lead;

class DashboardController extends Controller
{
    public function __construct()
    {
    	// 
    }

    public function board()
    {
    	return view('dashboard.pages.index', [
    		'users' => User::latest()->get(),
    		'leads' => Lead::latest()->get(),
    	]);
    }
}
