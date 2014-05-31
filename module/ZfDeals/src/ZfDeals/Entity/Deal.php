<?php

namespace ZfDeals\Entity;

class Deal
{
	protected $id;
	protected $price;
	protected $startDate;
	protected $endDate;
	protected $product;

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setPrice($price)
	{
		$this->price = $price;
		return $this;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		return $this;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		return $this;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setProduct($product)
	{
		$this->product = $product;
		return $this;
	}

	public function getProduct()
	{
		return $this->product;
	}
}