<?php

namespace ContainerLHJx6NR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T9UCQfmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t9UCQfm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t9UCQfm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'professionnelSanteRepository' => ['privates', 'App\\Repository\\ProfessionnelSanteRepository', 'getProfessionnelSanteRepositoryService', true],
        ], [
            'professionnelSanteRepository' => 'App\\Repository\\ProfessionnelSanteRepository',
        ]);
    }
}
