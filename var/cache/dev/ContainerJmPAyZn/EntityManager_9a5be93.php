<?php

namespace ContainerJmPAyZn;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6bbd3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b68e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0dadf = [
        
    ];

    public function getConnection()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getConnection', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getMetadataFactory', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getExpressionBuilder', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'beginTransaction', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getCache', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'transactional', array('func' => $func), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'commit', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->commit();
    }

    public function rollback()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'rollback', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getClassMetadata', array('className' => $className), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'createQuery', array('dql' => $dql), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'createNamedQuery', array('name' => $name), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'createQueryBuilder', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'flush', array('entity' => $entity), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'clear', array('entityName' => $entityName), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->clear($entityName);
    }

    public function close()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'close', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->close();
    }

    public function persist($entity)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'persist', array('entity' => $entity), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'remove', array('entity' => $entity), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'refresh', array('entity' => $entity), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'detach', array('entity' => $entity), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'merge', array('entity' => $entity), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'contains', array('entity' => $entity), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getEventManager', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getConfiguration', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'isOpen', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getUnitOfWork', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getProxyFactory', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'initializeObject', array('obj' => $obj), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'getFilters', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'isFiltersStateClean', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'hasFilters', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return $this->valueHolder6bbd3->hasFilters();
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

        $instance->initializer5b68e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6bbd3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6bbd3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6bbd3->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, '__get', ['name' => $name], $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        if (isset(self::$publicProperties0dadf[$name])) {
            return $this->valueHolder6bbd3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbd3;

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

        $targetObject = $this->valueHolder6bbd3;
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
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbd3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6bbd3;
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
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, '__isset', array('name' => $name), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbd3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6bbd3;
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
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, '__unset', array('name' => $name), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bbd3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6bbd3;
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
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, '__clone', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        $this->valueHolder6bbd3 = clone $this->valueHolder6bbd3;
    }

    public function __sleep()
    {
        $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, '__sleep', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;

        return array('valueHolder6bbd3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5b68e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5b68e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5b68e && ($this->initializer5b68e->__invoke($valueHolder6bbd3, $this, 'initializeProxy', array(), $this->initializer5b68e) || 1) && $this->valueHolder6bbd3 = $valueHolder6bbd3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bbd3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6bbd3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
