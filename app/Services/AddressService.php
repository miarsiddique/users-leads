<?php

namespace App\Services;

use App\Repositories\AddressRepository;
use App\Entities\AddressEntity;

class AddressService
{
	/**
	 * @var $repository
	 */
	protected $repository;

	/**
	 * class instance load
	 * @param LeadRepository $repository
	 */
	public function __construct(AddressRepository $repository)
	{
		$this->repository = $repository;
	}

	public function create(AddressEntity $entity)
	{
		return $this->repository->create($entity);
	}
}