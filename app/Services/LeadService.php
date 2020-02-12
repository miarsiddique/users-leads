<?php

namespace App\Services;

use App\Repositories\LeadRepository;

class LeadService
{
	/**
	 * @var $repository
	 */
	protected $repository;

	/**
	 * class instance load
	 * @param LeadRepository $repository
	 */
	public function __construct(LeadRepository $repository)
	{
		$this->repository = $repository;
	}

	public function getLeads($payload)
	{
		return $this->repository->getLeads($payload);
	}
}