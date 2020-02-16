<?php

namespace App\Repositories;

use App\Models\Customer;
use Illuminate\Support\Arr;
use App\Entities\CustomerEntity;
use App\Repositories\AddressRepository;

class CustomerRepository
{
	/**
	 * @var $model
	 */
	protected $model;

	/**
	 * @var $addressRepository
	 */
	protected $addressRepository;
	
	/**
	 * load instance of class
	 * @param Customer $model 
	 */
	public function __construct(Customer $model, AddressRepository $addressRepository)
	{
		$this->model = $model;
		$this->addressRepository = $addressRepository;
	}

	/**
	 * create customer
	 * @param  CustomerEntity $entity
	 * @return return customer models
	 */
	public function create(CustomerEntity $entity)
	{
		$paylaod = $entity->setPayload($entity);
		$customer = $this->model->create($paylaod);		
		return $customer;
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