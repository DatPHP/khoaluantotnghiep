<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\OrdersController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/src/Controller/OrdersController.php';

$this->services['App\\Controller\\OrdersController'] = $instance = new \App\Controller\OrdersController();

$instance->setContainer(($this->privates['.service_locator.vdmMuyE'] ?? $this->load('get_ServiceLocator_VdmMuyEService.php'))->withContext('App\\Controller\\OrdersController', $this));

return $instance;
