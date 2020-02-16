<?php

namespace App\Entities;

use Illuminate\Support\Arr;
use App\Entities\AddressEntity;

class CustomerEntity
{

    /**
     * @var userId
     */
    protected $user_id;

	/**
	 * @var $customer_name
	 */
	protected $customer_name;
	/**
	 * @var $company_name
	 */
	protected $company_name;
	/**
	 * @var $email
	 */
	protected $email;
	/**
	 * @var $pan_number
	 */
	protected $pan_number;
	/**
	 * @var $gstin_number
	 */
	protected $gstin_number;
	/**
	 * @var $phone_number
	 */
	protected $phone_number;

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * @param mixed $customer_name
     *
     * @return self
     */
    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPanNumber()
    {
        return $this->pan_number;
    }

    /**
     * @param mixed $pan_number
     *
     * @return self
     */
    public function setPanNumber($pan_number)
    {
        $this->pan_number = $pan_number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGstinNumber()
    {
        return $this->gstin_number;
    }

    /**
     * @param mixed $gstin_number
     *
     * @return self
     */
    public function setGstinNumber($gstin_number)
    {
        $this->gstin_number = $gstin_number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * set entity 
     * @param $payload
     */
    public function setEntities(array $payload)
    {
    	$entity = new CustomerEntity;

    	$entity = $entity->setCustomerName(Arr::get($payload, 'customer_name'))
						->setCompanyName(Arr::get($payload, 'company_name'))
						->setEmail(Arr::get($payload, 'email'))
						->setPanNumber(Arr::get($payload, 'pan_number'))
						->setGstinNumber(Arr::get($payload, 'gstin_number'))
                        ->setUserId(Arr::get($payload, 'user_id'))
						->setPhoneNumber(Arr::get($payload, 'phone_number'));
                        
		return $entity;
    }

    public function setAddressEntity(array $payload)
    {
        $addressEntity = new AddressEntity;

        $addressEntity = $addressEntity->setEntities($payload);

        return $addressEntity;
    }

    /**
     * set payload
     * @param $entity
     */
    public function setPayload($entity)
    {
    	return [
    		'customer_name' => $entity->getCompanyName(),
    		'company_name' => $entity->getCustomerName(),
    		'email' => $entity->getEmail(),
    		'pan_number' => $entity->getPanNumber(),
    		'gstin_number' => $entity->getGstinNumber(),
    		'phone_number' => $entity->getPhoneNumber(),
            'user_id' => $entity->getUserId(),
    	];
    }

    /**
     * @return userId
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param userId $user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}