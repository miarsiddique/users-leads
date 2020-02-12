<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LeadService;

class UserLeadsController extends Controller
{
	/**
	 * @var $service
	 */
	protected $service;

	/**
	 * load class instance
	 * @param LeadService $service
	 */
    public function __construct(LeadService $service)
    {
    	$this->service = $service; 
    }

    public function index(Request $request)
    {
    	# all leads list where user status active.
    	$leads = $this->service->getLeads($request->all());

    	# return view.
    	return view('dashboard.pages.leads', [
    		'leads' => $leads,
    	]); 
    }
}
