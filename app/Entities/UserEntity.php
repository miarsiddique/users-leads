<?php

namespace App\Entities;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class UserEntity
{
	/**
	 * @var $name
	 */
	protected $name;

	/**
	 * @var $email
	 */
	protected $email;

	/**
	 * @var $password
	 */
	protected $password;

	/**
	 * @var $status
	 */
	protected $status;

    /**
     * @var credentials
     */
    protected $credentials;

    /**
     * @return $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status $status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * set entities attributes.
     * @param array $payload
     * @return $entity
     */
    public function setEntityAttributes(array $payload)
    {
    	$entity = new UserEntity;

    	$entity = $entity->setName(Arr::get($payload, 'name'))
    					 ->setEmail(Arr::get($payload, 'email'))
    					 ->setPassword(Arr::get($payload, 'password'))
    					 ->setStatus(Arr::get($payload, 'status'));

    	return $entity;
    }

    /**
     * get user register data
     * @param $entity
     * @return array
     */
    public function getPayload($entity)
    {
		return [
			'name'	=> $entity->getName(),
			'email'	=> $entity->getEmail(),
			'password'	=> Hash::make($entity->getPassword()),
			'status'	=> $entity->getStatus(),
		];
    }

    /**
     * set credentials
     * @param array $payload
     */
    public function setCredentials(array $payload)
    {
        $entity = $this->setEntityAttributes($payload);

        $credentials = [
            'email'     => $entity->getEmail(),
            'password'  => $entity->getPassword()
        ];

        return $credentials;
    }

    /**
     * get credentials
     * @return array
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
}