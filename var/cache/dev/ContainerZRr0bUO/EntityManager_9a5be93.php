<?php

namespace ContainerZRr0bUO;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3b89b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfe33c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties89b4a = [
        
    ];

    public function getConnection()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getConnection', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getMetadataFactory', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getExpressionBuilder', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'beginTransaction', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getCache', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'transactional', array('func' => $func), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'commit', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->commit();
    }

    public function rollback()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'rollback', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getClassMetadata', array('className' => $className), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'createQuery', array('dql' => $dql), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'createNamedQuery', array('name' => $name), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'createQueryBuilder', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'flush', array('entity' => $entity), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'clear', array('entityName' => $entityName), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->clear($entityName);
    }

    public function close()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'close', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->close();
    }

    public function persist($entity)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'persist', array('entity' => $entity), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'remove', array('entity' => $entity), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'refresh', array('entity' => $entity), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'detach', array('entity' => $entity), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'merge', array('entity' => $entity), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'contains', array('entity' => $entity), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getEventManager', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getConfiguration', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'isOpen', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getUnitOfWork', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getProxyFactory', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'initializeObject', array('obj' => $obj), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'getFilters', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'isFiltersStateClean', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'hasFilters', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return $this->valueHolder3b89b->hasFilters();
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

        $instance->initializerfe33c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3b89b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3b89b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3b89b->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, '__get', ['name' => $name], $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        if (isset(self::$publicProperties89b4a[$name])) {
            return $this->valueHolder3b89b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b89b;

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

        $targetObject = $this->valueHolder3b89b;
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
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b89b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3b89b;
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
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, '__isset', array('name' => $name), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b89b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3b89b;
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
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, '__unset', array('name' => $name), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3b89b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3b89b;
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
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, '__clone', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        $this->valueHolder3b89b = clone $this->valueHolder3b89b;
    }

    public function __sleep()
    {
        $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, '__sleep', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;

        return array('valueHolder3b89b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfe33c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfe33c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfe33c && ($this->initializerfe33c->__invoke($valueHolder3b89b, $this, 'initializeProxy', array(), $this->initializerfe33c) || 1) && $this->valueHolder3b89b = $valueHolder3b89b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3b89b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3b89b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
