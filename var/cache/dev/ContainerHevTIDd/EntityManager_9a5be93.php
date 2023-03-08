<?php

namespace ContainerHevTIDd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4938a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer54359 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties05c4e = [
        
    ];

    public function getConnection()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getConnection', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getMetadataFactory', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getExpressionBuilder', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'beginTransaction', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getCache', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'transactional', array('func' => $func), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'commit', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->commit();
    }

    public function rollback()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'rollback', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getClassMetadata', array('className' => $className), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'createQuery', array('dql' => $dql), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'createNamedQuery', array('name' => $name), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'createQueryBuilder', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'flush', array('entity' => $entity), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'clear', array('entityName' => $entityName), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->clear($entityName);
    }

    public function close()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'close', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->close();
    }

    public function persist($entity)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'persist', array('entity' => $entity), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'remove', array('entity' => $entity), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'detach', array('entity' => $entity), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'merge', array('entity' => $entity), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'contains', array('entity' => $entity), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getEventManager', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getConfiguration', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'isOpen', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getUnitOfWork', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getProxyFactory', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'initializeObject', array('obj' => $obj), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'getFilters', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'isFiltersStateClean', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'hasFilters', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return $this->valueHolder4938a->hasFilters();
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

        $instance->initializer54359 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder4938a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4938a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4938a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, '__get', ['name' => $name], $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        if (isset(self::$publicProperties05c4e[$name])) {
            return $this->valueHolder4938a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4938a;

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

        $targetObject = $this->valueHolder4938a;
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
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4938a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4938a;
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
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, '__isset', array('name' => $name), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4938a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4938a;
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
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, '__unset', array('name' => $name), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4938a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4938a;
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
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, '__clone', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        $this->valueHolder4938a = clone $this->valueHolder4938a;
    }

    public function __sleep()
    {
        $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, '__sleep', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;

        return array('valueHolder4938a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer54359 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer54359;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer54359 && ($this->initializer54359->__invoke($valueHolder4938a, $this, 'initializeProxy', array(), $this->initializer54359) || 1) && $this->valueHolder4938a = $valueHolder4938a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4938a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4938a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
