<?php

namespace App\Services;

use App\Repositories\CustomerRepository;
use App\Entities\CustomerEntity;
use App\Entities\AddressEntity;

class CustomerService
{
	/**
	 * @var $repository
	 */
	protected $repository;

	/**
	 * class instance load
	 * @param LeadRepository $repository
	 */
	public function __construct(CustomerRepository $repository)
	{
		$this->repository = $repository;
	}

	public function create(CustomerEntity $entity)
	{
		return $this->repository->create($entity);
	}

	public function getLeads($payload)
	{
		return $this->repository->getLeads($payload);
	}
}