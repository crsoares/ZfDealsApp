<?php

namespace ZfDeals\Entity;

class Order
{
	protected $orderId;
	protected $firstname;
	protected $lastname;
	protected $street;
	protected $zip;
	protected $city;
	protected $deal;

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		return $this;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setFirstname($firstname)
	{
		$this->firstname = $firstname;
		return $this;
	}

	public function getFirstname()
	{
		return $this->firstname;
	}

	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
		return $this;
	}

	public function getLastname()
	{
		return $this->lastname;
	}

	public function setStreet($street)
	{
		$this->street = $street;
		return $this;
	}

	public function getStreet()
	{
		return $this->street;
	}

	public function setZip($zip)
	{
		$this->zip = $zip;
		return $this;
	}

	public function getZip()
	{
		return $this->zip;
	}

	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setDeal($deal)
	{
		$this->deal = $deal;
		return $this;
	}

	public function getDeal()
	{
		return $this->deal;
	}
}