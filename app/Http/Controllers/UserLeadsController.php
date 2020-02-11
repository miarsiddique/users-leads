<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLeadsController extends Controller
{
    public function __construct()
    {
    	// 
    }

    public function index()
    {
    	return view('dashboard.pages.leads'); 
    }
}
