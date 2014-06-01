<?php

namespace ZfDeals\Form;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilterProviderInterface;

class OrderFieldset extends Fieldset implements InputFilterProviderInterface
{
	public function __construct()
	{
		parent::__construct('order');

		$this->add(array(
			'name' => 'deal_id',
			'type' => 'Zend\Form\Element\Hidden'
		));

		$this->add(array(
			'name' => 'firstname',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'label' => 'Primeiro nome'
			)
		));

		$this->add(array(
			'name' => 'lastname',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'lable' => 'Sobrenome'
			)
		));

		$this->add(array(
			'name' => 'street',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'lable' => 'Rua'
			)
		));

		$this->add(array(
			'name' => 'zip',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'label' => 'Zip'
			)
		));

		$this->add(array(
			'name' => 'city',
			'type' => 'Zend\Form\Element\Text',
			'options' => array(
				'label' => 'Cidade'
			)
		));
	}

	public function getInputFilterSpecification()
	{
		return array(
			'firstname' => array(
				'required' => true,
				'filters' => array(
					array('name' => 'StringTrim')
				)
			),
			'lastname' => array(
				'required' => true,
				'filters' => array(
					array('name' => 'StringTrim'),
				)
			),
			'street' => array(
				'required' => true,
				'filters' => array(
					array('name' => 'StringTrim')
				)
			),
			'zip' => array(
				'requred' => true,
				'filters' => array(
					array('name' => 'StringTrim')
				)
			),
			'city' => array(
				'required' => true,
				'filters' => array(
					array('name' => 'StringTrim')
				)
			)
		);
	}
}