<?php

<<<<<<< HEAD:var/cache/dev/ContainerONxTf2N/get_Maker_AutoCommand_MakeCrud_LazyService.php
namespace ContainerONxTf2N;

=======
namespace ContainerBrRp53y;
>>>>>>> d54b9b8a16ff5945f42ca699395393e80e91368d:var/cache/dev/ContainerBrRp53y/get_Maker_AutoCommand_MakeCrud_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeCrud_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_crud.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.maker.auto_command.make_crud.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:crud', [], 'Creates CRUD for Doctrine entity class', false, #[\Closure(name: 'maker.auto_command.make_crud', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_crud'] ?? $container->load('getMaker_AutoCommand_MakeCrudService'));
        });
    }
}