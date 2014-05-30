<?php

namespace ZfDeals;

use Zend\ModuleManager\ModuleManager;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, AutoloaderProviderInterface/*,
ServiceProviderInterface*/
{
	public function init(ModuleManager $moduleManager)
	{
		$sharedEvents = $moduleManager->getEventManager()->getSharedManager();
		$sharedEvents->attach(
			'ZfDeals\Controller\AdminController',
			'dispatch',
			function($e) {
				$controller = $e->getTarget();
				$controller->layout('zf-deals/layout/admin');
			}
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
}