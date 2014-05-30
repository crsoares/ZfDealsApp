<?php

namespace ZfDeals\Entity;

class Product
{
	protected $id;
	protected $name;
	protected $stock;

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setStock($stock)
	{
		$this->stock = $stock;
		return $this;
	}

	public function getStock()
	{
		return $this->stock;
	}
}