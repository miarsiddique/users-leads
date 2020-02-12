<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Entities\UserEntity;

class UserService
{
	/**
	 * @var $repository
	 */
	protected $repository;

	/**
	 * class instance load
	 * @param UserRepository $repository
	 */
	public function __construct(UserRepository $repository)
	{
		$this->repository = $repository;	
	}

	/**
	 * create user
	 * @param  UserEntity $entity
	 * @return 
	 */
	public function createUser(UserEntity $entity)
	{
		return $this->repository->createUser($entity);	
	}

	public function userList()
	{
		return $this->repository->paginate();
	}
}