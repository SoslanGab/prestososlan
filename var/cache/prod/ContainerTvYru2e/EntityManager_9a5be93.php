<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9d43e = null;
    private $initializer64f82 = null;
    private static $publicProperties2333c = [
        
    ];
    public function getConnection()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getConnection', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getMetadataFactory', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getExpressionBuilder', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'beginTransaction', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getCache', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getCache();
    }
    public function transactional($func)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'transactional', array('func' => $func), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'commit', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->commit();
    }
    public function rollback()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'rollback', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getClassMetadata', array('className' => $className), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'createQuery', array('dql' => $dql), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'createNamedQuery', array('name' => $name), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'createQueryBuilder', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'flush', array('entity' => $entity), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'clear', array('entityName' => $entityName), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->clear($entityName);
    }
    public function close()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'close', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->close();
    }
    public function persist($entity)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'persist', array('entity' => $entity), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'remove', array('entity' => $entity), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'refresh', array('entity' => $entity), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'detach', array('entity' => $entity), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'merge', array('entity' => $entity), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'contains', array('entity' => $entity), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getEventManager', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getConfiguration', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'isOpen', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getUnitOfWork', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getProxyFactory', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'initializeObject', array('obj' => $obj), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'getFilters', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'isFiltersStateClean', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'hasFilters', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return $this->valueHolder9d43e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer64f82 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9d43e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9d43e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9d43e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, '__get', ['name' => $name], $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        if (isset(self::$publicProperties2333c[$name])) {
            return $this->valueHolder9d43e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d43e;
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
        $targetObject = $this->valueHolder9d43e;
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
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d43e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9d43e;
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
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, '__isset', array('name' => $name), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d43e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9d43e;
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
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, '__unset', array('name' => $name), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d43e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9d43e;
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
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, '__clone', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        $this->valueHolder9d43e = clone $this->valueHolder9d43e;
    }
    public function __sleep()
    {
        $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, '__sleep', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
        return array('valueHolder9d43e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer64f82 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer64f82;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer64f82 && ($this->initializer64f82->__invoke($valueHolder9d43e, $this, 'initializeProxy', array(), $this->initializer64f82) || 1) && $this->valueHolder9d43e = $valueHolder9d43e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9d43e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9d43e;
    }
}
