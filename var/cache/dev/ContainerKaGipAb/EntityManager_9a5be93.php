<?php

namespace ContainerKaGipAb;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb11c1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9117 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd9426 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getConnection', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getMetadataFactory', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getExpressionBuilder', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'beginTransaction', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getCache', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'transactional', array('func' => $func), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'commit', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->commit();
    }

    public function rollback()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'rollback', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'createQuery', array('dql' => $dql), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'createQueryBuilder', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'flush', array('entity' => $entity), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'clear', array('entityName' => $entityName), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'close', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->close();
    }

    public function persist($entity)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'persist', array('entity' => $entity), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'remove', array('entity' => $entity), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'refresh', array('entity' => $entity), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'detach', array('entity' => $entity), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'merge', array('entity' => $entity), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'contains', array('entity' => $entity), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getEventManager', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getConfiguration', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'isOpen', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getUnitOfWork', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getProxyFactory', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'getFilters', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'isFiltersStateClean', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'hasFilters', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return $this->valueHolderb11c1->hasFilters();
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

        $instance->initializerf9117 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb11c1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb11c1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb11c1->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, '__get', ['name' => $name], $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        if (isset(self::$publicPropertiesd9426[$name])) {
            return $this->valueHolderb11c1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb11c1;

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

        $targetObject = $this->valueHolderb11c1;
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
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb11c1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb11c1;
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
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, '__isset', array('name' => $name), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb11c1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb11c1;
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
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, '__unset', array('name' => $name), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb11c1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb11c1;
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
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, '__clone', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        $this->valueHolderb11c1 = clone $this->valueHolderb11c1;
    }

    public function __sleep()
    {
        $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, '__sleep', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;

        return array('valueHolderb11c1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9117 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9117;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9117 && ($this->initializerf9117->__invoke($valueHolderb11c1, $this, 'initializeProxy', array(), $this->initializerf9117) || 1) && $this->valueHolderb11c1 = $valueHolderb11c1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb11c1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb11c1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
