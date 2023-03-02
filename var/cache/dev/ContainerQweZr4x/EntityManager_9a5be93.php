<?php

namespace ContainerQweZr4x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6b1f8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbefdb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa4b4b = [
        
    ];

    public function getConnection()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getConnection', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getMetadataFactory', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getExpressionBuilder', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'beginTransaction', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getCache', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'transactional', array('func' => $func), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'commit', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->commit();
    }

    public function rollback()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'rollback', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getClassMetadata', array('className' => $className), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'createQuery', array('dql' => $dql), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'createNamedQuery', array('name' => $name), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'createQueryBuilder', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'flush', array('entity' => $entity), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'clear', array('entityName' => $entityName), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->clear($entityName);
    }

    public function close()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'close', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->close();
    }

    public function persist($entity)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'persist', array('entity' => $entity), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'remove', array('entity' => $entity), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'detach', array('entity' => $entity), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'merge', array('entity' => $entity), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'contains', array('entity' => $entity), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getEventManager', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getConfiguration', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'isOpen', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getUnitOfWork', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getProxyFactory', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'initializeObject', array('obj' => $obj), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'getFilters', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'isFiltersStateClean', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'hasFilters', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return $this->valueHolder6b1f8->hasFilters();
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

        $instance->initializerbefdb = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder6b1f8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6b1f8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6b1f8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, '__get', ['name' => $name], $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        if (isset(self::$publicPropertiesa4b4b[$name])) {
            return $this->valueHolder6b1f8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b1f8;

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

        $targetObject = $this->valueHolder6b1f8;
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
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b1f8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6b1f8;
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
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, '__isset', array('name' => $name), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b1f8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6b1f8;
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
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, '__unset', array('name' => $name), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6b1f8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6b1f8;
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
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, '__clone', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        $this->valueHolder6b1f8 = clone $this->valueHolder6b1f8;
    }

    public function __sleep()
    {
        $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, '__sleep', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;

        return array('valueHolder6b1f8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbefdb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbefdb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbefdb && ($this->initializerbefdb->__invoke($valueHolder6b1f8, $this, 'initializeProxy', array(), $this->initializerbefdb) || 1) && $this->valueHolder6b1f8 = $valueHolder6b1f8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6b1f8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6b1f8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
