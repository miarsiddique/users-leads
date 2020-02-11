<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
    	// 
    }
    
    public function register()
    {
    	return view('dashboard.auth.register'); 
    }

    public function index()
    {
    	return view('dashboard.pages.users'); 
    }

    public function store()
    {
    	// 
    }
}
