<?php

namespace App\Repositories;

use App\Models\Address;
use Illuminate\Support\Arr;
use App\Entities\AddressEntity;

class AddressRepository
{

	/**
	 * @var model
	 */
	protected $model;

	/**
	 * load class instance
	 * @param Address $model
	 */
	public function __construct(Address $model)
	{
		$this->model = $model;
	}

	/**
	 * create address
	 * @param  AddressEntity $entity
	 * @return bject
	 */
	public function create(AddressEntity $entity)
	{
		$payload = $entity->setPayload($entity);
		return $this->model->create($payload); 
	}
}