<?php

namespace ContainerPJlcJCx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRunSqlCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.
     *
     * @return \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'dbal'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tools'.\DIRECTORY_SEPARATOR.'Console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'RunSqlCommand.php';

        $container->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(($container->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $container->load('getManagerRegistryAwareConnectionProviderService')));

        $instance->setName('dbal:run-sql');

        return $instance;
    }
}
