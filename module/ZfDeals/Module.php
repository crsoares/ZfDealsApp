<?php

namespace ZfDeals;

use Zend\ModuleManager\ModuleManager;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module implements ConfigProviderInterface, AutoloaderProviderInterface,
ControllerProviderInterface, ServiceProviderInterface, ViewHelperProviderInterface
{
    public function init(ModuleManager $moduleManager)
    {
        $sharedEvents = $moduleManager->getEventManager()->getSharedManager();
        $sharedEvents->attach(
            'ZfDeals\Controller\AdminController',
            'dispatch',
            function ($e) {
                $controller = $e->getTarget();
                $controller->layout('zf-deals/layout/admin');
            }
        );

        $sharedEvents->attach(
            'ZfDeals\Controller\IndexController',
            'dispatch',
            function ($e) {
                $controller = $e->getTarget();
                $controller->layout('zf-deals/layout/site');
            },
            100
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                )
            )
        );
    }

    public function getServiceConfig()
    {
        return include __DIR__ . '/config/services.config.php';
    }

    public function getControllerConfig()
    {
        return include __DIR__ . '/config/controllers.config.php';
    }

    public function getViewHelperConfig()
    {
        return include __DIR__ . '/config/viewhelper.config.php';
    }
}
