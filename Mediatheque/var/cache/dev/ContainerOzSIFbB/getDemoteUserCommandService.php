<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Bundle\UserBundle\Command\DemoteUserCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Command/AbstractRoleCommand.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Command/DemoteUserCommand.php';

return $this->services['Sylius\Bundle\UserBundle\Command\DemoteUserCommand'] = new \Sylius\Bundle\UserBundle\Command\DemoteUserCommand();