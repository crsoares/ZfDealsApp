<?php

namespace ZfDeals\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class DealAddFormControllerFactory implements FactoryInterface
{
	public function createService(SErviceLocatorInterface $serviceLocator)
	{
		$form = new ZfDeals\Form\Deal();
		$ctr = new DealAddFormController($form);

		$dealMapper = $serviceLocator->getServiceLocator()->get('ZfDeals\Mapper\Product');
		$ctr->setProductMapper($productMapper);
		return $ctr;
	}
}