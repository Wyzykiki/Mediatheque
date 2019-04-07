<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Bundle\FixturesBundle\Suite\SuiteFactoryInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Suite/SuiteFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Suite/SuiteFactory.php';

return $this->services['Sylius\Bundle\FixturesBundle\Suite\SuiteFactoryInterface'] = new \Sylius\Bundle\FixturesBundle\Suite\SuiteFactory(($this->services['sylius_fixtures.fixture_registry'] ?? $this->load('getSyliusFixtures_FixtureRegistryService.php')), ($this->services['Sylius\Bundle\FixturesBundle\Listener\ListenerRegistryInterface'] ?? $this->load('getListenerRegistryInterfaceService.php')), new \Symfony\Component\Config\Definition\Processor());