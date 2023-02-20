<?php

namespace ContainerPvc1o5f;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1266a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfd356 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1e360 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getConnection', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getMetadataFactory', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getExpressionBuilder', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'beginTransaction', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getCache', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'transactional', array('func' => $func), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'commit', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->commit();
    }

    public function rollback()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'rollback', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getClassMetadata', array('className' => $className), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'createQuery', array('dql' => $dql), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'createNamedQuery', array('name' => $name), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'createQueryBuilder', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'flush', array('entity' => $entity), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'clear', array('entityName' => $entityName), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->clear($entityName);
    }

    public function close()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'close', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->close();
    }

    public function persist($entity)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'persist', array('entity' => $entity), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'remove', array('entity' => $entity), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'refresh', array('entity' => $entity), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'detach', array('entity' => $entity), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'merge', array('entity' => $entity), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'contains', array('entity' => $entity), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getEventManager', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getConfiguration', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'isOpen', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getUnitOfWork', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getProxyFactory', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'initializeObject', array('obj' => $obj), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'getFilters', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'isFiltersStateClean', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'hasFilters', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return $this->valueHolder1266a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfd356 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder1266a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1266a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1266a->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, '__get', ['name' => $name], $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        if (isset(self::$publicProperties1e360[$name])) {
            return $this->valueHolder1266a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1266a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1266a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1266a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1266a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, '__isset', array('name' => $name), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1266a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1266a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, '__unset', array('name' => $name), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1266a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1266a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, '__clone', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        $this->valueHolder1266a = clone $this->valueHolder1266a;
    }

    public function __sleep()
    {
        $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, '__sleep', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;

        return array('valueHolder1266a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfd356 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfd356;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfd356 && ($this->initializerfd356->__invoke($valueHolder1266a, $this, 'initializeProxy', array(), $this->initializerfd356) || 1) && $this->valueHolder1266a = $valueHolder1266a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1266a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1266a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
