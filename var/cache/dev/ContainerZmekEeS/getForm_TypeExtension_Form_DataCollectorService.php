<?php

<<<<<<< HEAD:var/cache/dev/ContainerONxTf2N/getForm_TypeExtension_Form_DataCollectorService.php
namespace ContainerONxTf2N;

=======
namespace ContainerZmekEeS;
>>>>>>> d54b9b8a16ff5945f42ca699395393e80e91368d:var/cache/dev/ContainerZmekEeS/getForm_TypeExtension_Form_DataCollectorService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_Form_DataCollectorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'DataCollectorTypeExtension.php';

        return $container->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService()));
    }
}
