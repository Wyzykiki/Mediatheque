<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Core\Inventory\Operator\OrderInventoryOperatorInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Inventory/Operator/OrderInventoryOperatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Doctrine/ORM/Inventory/Operator/OrderInventoryOperator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Inventory/Operator/OrderInventoryOperator.php';

return $this->services['Sylius\Component\Core\Inventory\Operator\OrderInventoryOperatorInterface'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\Inventory\Operator\OrderInventoryOperator(new \Sylius\Component\Core\Inventory\Operator\OrderInventoryOperator(), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));