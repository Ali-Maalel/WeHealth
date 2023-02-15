<?php

namespace ContainerUDYIVIM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc166f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8654e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesadecd = [
        
    ];

    public function getConnection()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getConnection', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getMetadataFactory', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getExpressionBuilder', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'beginTransaction', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getCache', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'transactional', array('func' => $func), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'commit', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->commit();
    }

    public function rollback()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'rollback', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getClassMetadata', array('className' => $className), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'createQuery', array('dql' => $dql), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'createNamedQuery', array('name' => $name), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'createQueryBuilder', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'flush', array('entity' => $entity), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'clear', array('entityName' => $entityName), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->clear($entityName);
    }

    public function close()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'close', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->close();
    }

    public function persist($entity)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'persist', array('entity' => $entity), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'remove', array('entity' => $entity), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'refresh', array('entity' => $entity), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'detach', array('entity' => $entity), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'merge', array('entity' => $entity), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'contains', array('entity' => $entity), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getEventManager', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getConfiguration', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'isOpen', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getUnitOfWork', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getProxyFactory', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'initializeObject', array('obj' => $obj), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'getFilters', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'isFiltersStateClean', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'hasFilters', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return $this->valueHolderc166f->hasFilters();
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

        $instance->initializer8654e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc166f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc166f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc166f->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, '__get', ['name' => $name], $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        if (isset(self::$publicPropertiesadecd[$name])) {
            return $this->valueHolderc166f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc166f;

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

        $targetObject = $this->valueHolderc166f;
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
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc166f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc166f;
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
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, '__isset', array('name' => $name), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc166f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc166f;
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
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, '__unset', array('name' => $name), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc166f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc166f;
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
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, '__clone', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        $this->valueHolderc166f = clone $this->valueHolderc166f;
    }

    public function __sleep()
    {
        $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, '__sleep', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;

        return array('valueHolderc166f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8654e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8654e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8654e && ($this->initializer8654e->__invoke($valueHolderc166f, $this, 'initializeProxy', array(), $this->initializer8654e) || 1) && $this->valueHolderc166f = $valueHolderc166f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc166f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc166f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
