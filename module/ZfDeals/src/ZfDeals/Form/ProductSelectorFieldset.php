<?php

namespace ZfDeals\Form;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterInterface;

class ProductSelectorFieldset extends Fieldset
{
	public function __construct()
	{
		parent::__construct('productSelector');
		$this->setHydrator(new \Zend\Stdlin\Hydrator\Reflection());
		$this->setObject(new \ZfDeals\Entity\Product());

		$this->array(array(
			'name' => 'id',
			'type' => 'Zend\Form\Element\Select',
			'options' => array(
				'label' => 'Identificação do produto:',
				'value_options' => array(
					'1' => 'Label 1',
					'2' => 'Label 2',
				)
			)
		));
	}
}