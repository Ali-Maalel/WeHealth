<?php

namespace ContainerMGYDvdx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec681 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9e71f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d5ec = [
        
    ];

    public function getConnection()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getConnection', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getMetadataFactory', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getExpressionBuilder', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'beginTransaction', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getCache', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'transactional', array('func' => $func), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'commit', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->commit();
    }

    public function rollback()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'rollback', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getClassMetadata', array('className' => $className), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'createQuery', array('dql' => $dql), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'createNamedQuery', array('name' => $name), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'createQueryBuilder', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'flush', array('entity' => $entity), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'clear', array('entityName' => $entityName), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->clear($entityName);
    }

    public function close()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'close', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->close();
    }

    public function persist($entity)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'persist', array('entity' => $entity), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'remove', array('entity' => $entity), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'detach', array('entity' => $entity), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'merge', array('entity' => $entity), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'contains', array('entity' => $entity), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getEventManager', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getConfiguration', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'isOpen', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getUnitOfWork', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getProxyFactory', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'initializeObject', array('obj' => $obj), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'getFilters', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'isFiltersStateClean', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'hasFilters', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return $this->valueHolderec681->hasFilters();
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

        $instance->initializer9e71f = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderec681) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec681 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec681->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, '__get', ['name' => $name], $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        if (isset(self::$publicProperties8d5ec[$name])) {
            return $this->valueHolderec681->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec681;

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

        $targetObject = $this->valueHolderec681;
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
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec681;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec681;
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
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, '__isset', array('name' => $name), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec681;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec681;
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
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, '__unset', array('name' => $name), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec681;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec681;
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
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, '__clone', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        $this->valueHolderec681 = clone $this->valueHolderec681;
    }

    public function __sleep()
    {
        $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, '__sleep', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;

        return array('valueHolderec681');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9e71f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9e71f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9e71f && ($this->initializer9e71f->__invoke($valueHolderec681, $this, 'initializeProxy', array(), $this->initializer9e71f) || 1) && $this->valueHolderec681 = $valueHolderec681;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec681;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec681;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
