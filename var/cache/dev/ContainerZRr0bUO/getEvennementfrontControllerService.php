<?php

namespace ContainerZRr0bUO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvennementfrontControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EvennementfrontController' shared autowired service.
     *
     * @return \App\Controller\EvennementfrontController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EvennementfrontController.php';

        $container->services['App\\Controller\\EvennementfrontController'] = $instance = new \App\Controller\EvennementfrontController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EvennementfrontController', $container));

        return $instance;
    }
}
