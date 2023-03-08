<?php

namespace ContainerQy4MTcM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ff04 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer89992 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd607d = [
        
    ];

    public function getConnection()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getConnection', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getMetadataFactory', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getExpressionBuilder', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'beginTransaction', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getCache', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getCache();
    }

    public function transactional($func)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'transactional', array('func' => $func), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'wrapInTransaction', array('func' => $func), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'commit', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->commit();
    }

    public function rollback()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'rollback', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getClassMetadata', array('className' => $className), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'createQuery', array('dql' => $dql), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'createNamedQuery', array('name' => $name), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'createQueryBuilder', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'flush', array('entity' => $entity), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'clear', array('entityName' => $entityName), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->clear($entityName);
    }

    public function close()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'close', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->close();
    }

    public function persist($entity)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'persist', array('entity' => $entity), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'remove', array('entity' => $entity), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'detach', array('entity' => $entity), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'merge', array('entity' => $entity), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getRepository', array('entityName' => $entityName), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'contains', array('entity' => $entity), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getEventManager', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getConfiguration', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'isOpen', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getUnitOfWork', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getProxyFactory', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'initializeObject', array('obj' => $obj), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'getFilters', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'isFiltersStateClean', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'hasFilters', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return $this->valueHolder8ff04->hasFilters();
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

        $instance->initializer89992 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder8ff04) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ff04 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ff04->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, '__get', ['name' => $name], $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        if (isset(self::$publicPropertiesd607d[$name])) {
            return $this->valueHolder8ff04->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff04;

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

        $targetObject = $this->valueHolder8ff04;
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
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff04;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ff04;
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
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, '__isset', array('name' => $name), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff04;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ff04;
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
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, '__unset', array('name' => $name), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ff04;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ff04;
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
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, '__clone', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        $this->valueHolder8ff04 = clone $this->valueHolder8ff04;
    }

    public function __sleep()
    {
        $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, '__sleep', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;

        return array('valueHolder8ff04');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer89992 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer89992;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer89992 && ($this->initializer89992->__invoke($valueHolder8ff04, $this, 'initializeProxy', array(), $this->initializer89992) || 1) && $this->valueHolder8ff04 = $valueHolder8ff04;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ff04;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ff04;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
