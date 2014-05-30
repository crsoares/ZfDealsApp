<?php

namespace ZfDeals\Form;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilterProviderInterface;

class ProductFieldset extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('product');

        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'text'
            ),
            'options' => array(
                'label' => 'Produto-ID:'
            )
        ));

        $this->add(array(
            'name' => 'name',
            'attirbutes' => array(
                'type' => 'text'
            ),
            'options' => array(
                'label' => 'Produto:'
            )
        ));

        $this->add(array(
            'name' => 'stock',
            'attributes' => array(
                'type' => 'number',
            ),
            'options' => array(
                'label' => 'Estoque:'
            )
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            'id' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'message' => 'Por favor insira o ID do produto.'
                        )
                    )
                )
            ),
            'name' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'StringTrim')
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'message' => 'Por favor insira um nome de produto.'
                        )
                    )
                )
            ),
            'stock' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'NotEmpty',
                        'options' => array(
                            'message' => 'Por favor entre o inventário.'
                        )
                    ),
                    array(
                        'name' => 'Digits',
                        'options' => array(
                            'message' => 'Por favor insira um valor inteiro.'
                        )
                    ),
                    array(
                        'name' => 'GreaterThan',
                        'options' => array(
                            'min' => 0,
                            'message' => 'Por favor insira um valor >= 0.'
                        )
                    )
                )
            )
        );
    }
}
