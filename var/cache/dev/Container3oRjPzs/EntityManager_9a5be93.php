<?php

namespace Container3oRjPzs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf7003 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9fb1b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties46d4d = [
        
    ];

    public function getConnection()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getConnection', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getMetadataFactory', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getExpressionBuilder', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'beginTransaction', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getCache', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'transactional', array('func' => $func), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'commit', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->commit();
    }

    public function rollback()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'rollback', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getClassMetadata', array('className' => $className), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'createQuery', array('dql' => $dql), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'createNamedQuery', array('name' => $name), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'createQueryBuilder', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'flush', array('entity' => $entity), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'clear', array('entityName' => $entityName), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->clear($entityName);
    }

    public function close()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'close', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->close();
    }

    public function persist($entity)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'persist', array('entity' => $entity), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'remove', array('entity' => $entity), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'detach', array('entity' => $entity), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'merge', array('entity' => $entity), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'contains', array('entity' => $entity), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getEventManager', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getConfiguration', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'isOpen', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getUnitOfWork', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getProxyFactory', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'initializeObject', array('obj' => $obj), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'getFilters', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'isFiltersStateClean', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'hasFilters', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return $this->valueHolderf7003->hasFilters();
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

        $instance->initializer9fb1b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderf7003) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf7003 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf7003->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, '__get', ['name' => $name], $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        if (isset(self::$publicProperties46d4d[$name])) {
            return $this->valueHolderf7003->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7003;

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

        $targetObject = $this->valueHolderf7003;
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
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7003;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf7003;
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
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, '__isset', array('name' => $name), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7003;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf7003;
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
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, '__unset', array('name' => $name), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7003;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf7003;
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
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, '__clone', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        $this->valueHolderf7003 = clone $this->valueHolderf7003;
    }

    public function __sleep()
    {
        $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, '__sleep', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;

        return array('valueHolderf7003');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9fb1b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9fb1b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9fb1b && ($this->initializer9fb1b->__invoke($valueHolderf7003, $this, 'initializeProxy', array(), $this->initializer9fb1b) || 1) && $this->valueHolderf7003 = $valueHolderf7003;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7003;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7003;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
