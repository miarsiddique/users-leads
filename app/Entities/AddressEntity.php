<?php

namespace App\Entities;

use Illuminate\Support\Arr;

class AddressEntity
{
	/**
	 * @var $user_id
	 */
	protected $user_id;
	/**
	 * @var $customer_id
	 */
	protected $customer_id;
	/**
	 * @var $line1
	 */
	protected $line1;
	/**
	 * @var $line2
	 */
	protected $line2;
	/**
	 * @var $city
	 */
	protected $city;
	/**
	 * @var $state
	 */
	protected $state;
	/**
	 * @var $pin_code
	 */
	protected $pin_code;
	/**
	 * @var $state_code
	 */
	protected $state_code;

    /**
     * @return $user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param $user_id $user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return $customer_id
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @param $customer_id $customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * @return $line1
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * @param $line1 $line1
     *
     * @return self
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;

        return $this;
    }

    /**
     * @return $line2
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * @param $line2 $line2
     *
     * @return self
     */
    public function setLine2($line2)
    {
        $this->line2 = $line2;

        return $this;
    }

    /**
     * @return $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $city $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $pin_code
     */
    public function getPinCode()
    {
        return $this->pin_code;
    }

    /**
     * @param $pin_code $pin_code
     *
     * @return self
     */
    public function setPinCode($pin_code)
    {
        $this->pin_code = $pin_code;

        return $this;
    }

    /**
     * @return $state_code
     */
    public function getStateCode()
    {
        return $this->state_code;
    }

    /**
     * @param $state_code $state_code
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        $this->state_code = $state_code;

        return $this;
    }

    /**
     * ser entities 
     * @param $payload
     */
    public function setEntities(array $payload)
    {
    	$entity = new AddressEntity;

    	$entity = $entity->setCustomerId(Arr::get($payload, 'customer_id'))
						->setLine1(Arr::get($payload, 'line1'))
						->setLine2(Arr::get($payload, 'line2'))
						->setCity(Arr::get($payload, 'city'))
						->setState(Arr::get($payload, 'state'))
						->setPinCode(Arr::get($payload, 'pin_code'))
						->setStateCode(Arr::get($payload, 'state_code'));

		return $entity;
    }

    /**
     * set payloads
     * @param $entity
     */
    public function setPayload($entity)
    {
    	return [
			'user_id' => $entity->getUserId(),
			'customer_id' => $entity->getCustomerId(),
			'line1' => $entity->getLine1(),
			'line2' => $entity->getLine2(),
			'city' => $entity->getCity(),
			'state' => $entity->getState(),
			'pin_code' => $entity->getPinCode(),
			'state_code' => $entity->getStateCode(),
    	];
    }
}