<?php

<<<<<<< HEAD:var/cache/dev/ContainerONxTf2N/getContainer_GetRoutingConditionServiceService.php
namespace ContainerONxTf2N;

=======
namespace ContainerBrRp53y;
>>>>>>> d54b9b8a16ff5945f42ca699395393e80e91368d:var/cache/dev/ContainerBrRp53y/getContainer_GetRoutingConditionServiceService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetRoutingConditionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'container.get_routing_condition_service' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['container.get_routing_condition_service'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], []))->get(...);
    }
}
