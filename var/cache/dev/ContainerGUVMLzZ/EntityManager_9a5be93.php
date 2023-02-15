<?php

namespace ContainerGUVMLzZ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder67fdd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8038e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8fbe7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getConnection', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getMetadataFactory', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getExpressionBuilder', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'beginTransaction', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getCache', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'transactional', array('func' => $func), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'commit', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->commit();
    }

    public function rollback()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'rollback', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getClassMetadata', array('className' => $className), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'createQuery', array('dql' => $dql), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'createNamedQuery', array('name' => $name), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'createQueryBuilder', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'flush', array('entity' => $entity), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'clear', array('entityName' => $entityName), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->clear($entityName);
    }

    public function close()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'close', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->close();
    }

    public function persist($entity)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'persist', array('entity' => $entity), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'remove', array('entity' => $entity), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'refresh', array('entity' => $entity), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'detach', array('entity' => $entity), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'merge', array('entity' => $entity), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'contains', array('entity' => $entity), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getEventManager', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getConfiguration', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'isOpen', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getUnitOfWork', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getProxyFactory', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'initializeObject', array('obj' => $obj), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'getFilters', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'isFiltersStateClean', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'hasFilters', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return $this->valueHolder67fdd->hasFilters();
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

        $instance->initializer8038e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder67fdd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder67fdd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder67fdd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, '__get', ['name' => $name], $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        if (isset(self::$publicProperties8fbe7[$name])) {
            return $this->valueHolder67fdd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67fdd;

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

        $targetObject = $this->valueHolder67fdd;
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
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67fdd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder67fdd;
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
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, '__isset', array('name' => $name), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67fdd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder67fdd;
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
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, '__unset', array('name' => $name), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67fdd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder67fdd;
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
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, '__clone', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        $this->valueHolder67fdd = clone $this->valueHolder67fdd;
    }

    public function __sleep()
    {
        $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, '__sleep', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;

        return array('valueHolder67fdd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8038e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8038e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8038e && ($this->initializer8038e->__invoke($valueHolder67fdd, $this, 'initializeProxy', array(), $this->initializer8038e) || 1) && $this->valueHolder67fdd = $valueHolder67fdd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder67fdd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67fdd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
