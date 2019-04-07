<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.static_registry' shared service.

include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/GatewayRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/GatewayFactoryRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/StorageRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/RegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Registry/AbstractRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/payum/payum/src/Payum/Core/Bridge/Symfony/ContainerAwareRegistry.php';

$this->services['payum.static_registry'] = $instance = new \Payum\Core\Bridge\Symfony\ContainerAwareRegistry([], ['App\\Entity\\Order\\Order' => 'payum.storage.app_entity_order_order', 'App\\Entity\\Payment\\Payment' => 'payum.storage.app_entity_payment_payment'], []);

$instance->setContainer($this);

return $instance;