<?php

class ChannelRepository_04960bc extends \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6bff5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e561 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0073a = [
        
    ];

    public function findOneByHostname(string $hostname) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'findOneByHostname', array('hostname' => $hostname), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->findOneByHostname($hostname);
    }

    public function findOneByCode(string $code) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'findOneByCode', array('code' => $code), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->findOneByCode($code);
    }

    public function findByName(string $name) : iterable
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'findByName', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->findByName($name);
    }

    public function add(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'add', array('resource' => $resource), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $this->valueHolder6bff5->add($resource);
return;
    }

    public function remove(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'remove', array('resource' => $resource), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $this->valueHolder6bff5->remove($resource);
return;
    }

    public function createPaginator(array $criteria = [], array $sorting = []) : iterable
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createPaginator', array('criteria' => $criteria, 'sorting' => $sorting), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createPaginator($criteria, $sorting);
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'clear', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'findAll', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'count', array('criteria' => $criteria), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'getClassName', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'matching', array('criteria' => $criteria), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->matching($criteria);
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
        $instance = $reflection->newInstanceWithoutConstructor();

        unset($instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializer7e561 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;

        if (! $this->valueHolder6bff5) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository');
            $this->valueHolder6bff5 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder6bff5->__construct($em, $class);
    }

    public function & __get($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__get', ['name' => $name], $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        if (isset(self::$publicProperties0073a[$name])) {
            return $this->valueHolder6bff5->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__isset', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__unset', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__clone', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $this->valueHolder6bff5 = clone $this->valueHolder6bff5;
    }

    public function __sleep()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__sleep', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return array('valueHolder6bff5');
    }

    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer7e561 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer7e561;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'initializeProxy', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bff5;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder6bff5;
    }


}