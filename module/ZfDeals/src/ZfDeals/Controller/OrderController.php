<?php

namespace ZfDeals\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class OrderController extends AbstractActionController
{
	private $orderMapper;

	public function showAllAction()
	{
		$orders = $this->orderMapper->select();
		//print_r($orders->toArray());die;
		return new ViewModel(array(
			'orders' => $orders
		));
	}

	public function setOrderMapper($orderMapper)
	{
		$this->orderMapper = $orderMapper;
	}

	public function getOrderMapper()
	{
		return $this->orderMapper;
	}
}