<?php

namespace App\Repositories;


use App\Models\Lead;
use Illuminate\Support\Arr;

class LeadRepository
{
	/**
	 * @var $model
	 */
	protected $model;
	
	/**
	 * load instance of class
	 * @param Lead $model 
	 */
	public function __construct(Lead $model)
	{
		$this->model = $model;
	}

	/**
	 * get all lead
	 * @param  $paylaod
	 * @return leads
	 */
	public function getLeads($paylaod)
	{
		# for filter
		$type = Arr::get($paylaod, 'lead_type');

		# get all list where user status active
		$leads = $this->model->join('users', function($join) {
					    	$join->on('leads.user_id', '=', 'users.id')
				             ->where('users.status', '=', 'ACTIVE');
						})->select(
							'users.name as user_name', 
							'users.status as user_status',
							'leads.query', 
							'leads.type', 
							'leads.status as lead_status')
						->where('type', 'LIKE', "%".$type."%")
						->paginate(10);

		return $leads;
	}
}