<?php

namespace ContainerQy4MTcM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QUXjZKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QU_XjZK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QU_XjZK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
        ]);
    }
}
