<?php

namespace Container3oRjPzs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XZReddHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xZReddH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xZReddH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'numMedia' => ['privates', '.errored..service_locator.xZReddH.App\\Entity\\NumMedia', NULL, 'Cannot autowire service ".service_locator.xZReddH": it references class "App\\Entity\\NumMedia" but no such service exists.'],
        ], [
            'numMedia' => 'App\\Entity\\NumMedia',
        ]);
    }
}
