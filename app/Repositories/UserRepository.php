<?php

namespace App\Repositories;

use App\Models\User;
use App\Entities\UserEntity;

class UserRepository
{
	/**
	 * @var $model
	 */
	protected $model;

	/**
	 * class instance load
	 * @param User $model 
	 */
	public function __construct(User $model)
	{
		$this->model = $model;
	}

	/**
	 * create user
	 * @param  UserEntity $entity
	 * @return user
	 */
	public function createUser(UserEntity $entity)
	{
		# get payload of user data.
		$payload = $entity->getPayload($entity);
		# create user.
		return $this->model->create($payload);
	}

	/**
	 * user list
	 * @return users collection
	 */
	public function paginate()
	{
		return $this->model->paginate(10);
	}
	
}