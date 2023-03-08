<?php

namespace ContainerLHJx6NR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder598ac = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8228d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties88bcc = [
        
    ];

    public function getConnection()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getConnection', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getMetadataFactory', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getExpressionBuilder', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'beginTransaction', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getCache', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'transactional', array('func' => $func), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'commit', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->commit();
    }

    public function rollback()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'rollback', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getClassMetadata', array('className' => $className), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'createQuery', array('dql' => $dql), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'createNamedQuery', array('name' => $name), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'createQueryBuilder', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'flush', array('entity' => $entity), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'clear', array('entityName' => $entityName), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->clear($entityName);
    }

    public function close()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'close', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->close();
    }

    public function persist($entity)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'persist', array('entity' => $entity), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'remove', array('entity' => $entity), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'detach', array('entity' => $entity), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'merge', array('entity' => $entity), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'contains', array('entity' => $entity), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getEventManager', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getConfiguration', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'isOpen', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getUnitOfWork', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getProxyFactory', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'initializeObject', array('obj' => $obj), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'getFilters', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'isFiltersStateClean', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'hasFilters', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return $this->valueHolder598ac->hasFilters();
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

        $instance->initializer8228d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder598ac) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder598ac = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder598ac->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, '__get', ['name' => $name], $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        if (isset(self::$publicProperties88bcc[$name])) {
            return $this->valueHolder598ac->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder598ac;

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

        $targetObject = $this->valueHolder598ac;
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
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder598ac;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder598ac;
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
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, '__isset', array('name' => $name), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder598ac;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder598ac;
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
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, '__unset', array('name' => $name), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder598ac;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder598ac;
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
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, '__clone', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        $this->valueHolder598ac = clone $this->valueHolder598ac;
    }

    public function __sleep()
    {
        $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, '__sleep', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;

        return array('valueHolder598ac');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8228d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8228d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8228d && ($this->initializer8228d->__invoke($valueHolder598ac, $this, 'initializeProxy', array(), $this->initializer8228d) || 1) && $this->valueHolder598ac = $valueHolder598ac;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder598ac;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder598ac;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
