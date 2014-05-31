<?php

namespace ZfDeals\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AdminController extends AbstractActionController
{
    private $productAddForm;
    private $productMapper;
    private $dealAddForm;
    private $dealMapper;

    public function indexAction()
    {
        return new ViewModel();
    }

    public function addProductAction()
    {
        $form = $this->productAddForm;

        if ($this->getRequest()->isPost()) {
            $form->setData($this->getRequest()->getPost());

            if ($form->isValid()) {
                $model = new ViewModel(array(
                    'form' => $form,
                ));

                try {
                    $this->productMapper->insert($form->getData());
                    $model->setVariable('success', true);
                } catch (\Exception $e) {
                    $model->setVariable('insertError', true);
                }

                return $model;
            } else {
                return new ViewModel(array(
                    'form' => $form,
                ));
            }
        } else {
            return new ViewModel(array(
                'form' => $form,
            ));
        }
    }

    public function setProductAddForm($productAddForm)
    {
        $this->productAddForm = $productAddForm;
    }

    public function getProductAddForm()
    {
        return $this->productAddForm;
    }

    public function setProductMapper($productMapper)
    {
        $this->productMapper = $productMapper;
    }

    public function getProductMapper()
    {
        return $this->productMapper;
    }

    public function setDealAddForm($dealAddForm)
    {
        $this->dealAddForm = $dealAddForm;
        return $this;
    }

    public function getDealAddForm()
    {
        return $this->dealAddForm;
    }

    public function setDealMapper($dealMapper)
    {
        $this->dealMaper = $dealMapper;
        return $this;
    }

    public function getDealMapper()
    {
        return $this->dealMapper;
    }
}
