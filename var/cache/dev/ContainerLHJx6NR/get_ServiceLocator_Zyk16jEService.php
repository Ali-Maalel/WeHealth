<?php

namespace ContainerLHJx6NR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zyk16jEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Zyk16jE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zyk16jE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'professionnelSante' => ['privates', '.errored..service_locator.Zyk16jE.App\\Entity\\ProfessionnelSante', NULL, 'Cannot autowire service ".service_locator.Zyk16jE": it references class "App\\Entity\\ProfessionnelSante" but no such service exists.'],
        ], [
            'professionnelSante' => 'App\\Entity\\ProfessionnelSante',
        ]);
    }
}
