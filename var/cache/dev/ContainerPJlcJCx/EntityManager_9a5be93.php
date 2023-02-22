<?php

namespace ContainerPJlcJCx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1aa01 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbc46b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8ce29 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getConnection', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getMetadataFactory', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getExpressionBuilder', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'beginTransaction', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getCache', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'transactional', array('func' => $func), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'commit', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->commit();
    }

    public function rollback()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'rollback', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getClassMetadata', array('className' => $className), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'createQuery', array('dql' => $dql), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'createNamedQuery', array('name' => $name), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'createQueryBuilder', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'flush', array('entity' => $entity), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'clear', array('entityName' => $entityName), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->clear($entityName);
    }

    public function close()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'close', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->close();
    }

    public function persist($entity)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'persist', array('entity' => $entity), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'remove', array('entity' => $entity), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'detach', array('entity' => $entity), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'merge', array('entity' => $entity), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'contains', array('entity' => $entity), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getEventManager', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getConfiguration', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'isOpen', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getUnitOfWork', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getProxyFactory', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'initializeObject', array('obj' => $obj), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'getFilters', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'isFiltersStateClean', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'hasFilters', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return $this->valueHolder1aa01->hasFilters();
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

        $instance->initializerbc46b = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder1aa01) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1aa01 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1aa01->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, '__get', ['name' => $name], $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        if (isset(self::$publicProperties8ce29[$name])) {
            return $this->valueHolder1aa01->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa01;

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

        $targetObject = $this->valueHolder1aa01;
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
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa01;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1aa01;
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
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, '__isset', array('name' => $name), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa01;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1aa01;
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
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, '__unset', array('name' => $name), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1aa01;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1aa01;
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
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, '__clone', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        $this->valueHolder1aa01 = clone $this->valueHolder1aa01;
    }

    public function __sleep()
    {
        $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, '__sleep', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;

        return array('valueHolder1aa01');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbc46b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbc46b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbc46b && ($this->initializerbc46b->__invoke($valueHolder1aa01, $this, 'initializeProxy', array(), $this->initializerbc46b) || 1) && $this->valueHolder1aa01 = $valueHolder1aa01;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1aa01;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1aa01;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
