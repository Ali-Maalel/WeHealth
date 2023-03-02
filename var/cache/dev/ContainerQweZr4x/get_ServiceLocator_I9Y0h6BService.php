<?php

namespace ContainerQweZr4x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I9Y0h6BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i9Y0h6B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i9Y0h6B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'articleRepository' => ['privates', 'App\\Repository\\ArticleRepository', 'getArticleRepositoryService', true],
        ], [
            'articleRepository' => 'App\\Repository\\ArticleRepository',
        ]);
    }
}
