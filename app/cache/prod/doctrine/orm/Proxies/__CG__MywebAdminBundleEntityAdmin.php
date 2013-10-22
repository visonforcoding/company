<?php

namespace Proxies\__CG__\Myweb\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Admin extends \Myweb\AdminBundle\Entity\Admin implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setPasswd($passwd)
    {
        $this->__load();
        return parent::setPasswd($passwd);
    }

    public function getPasswd()
    {
        $this->__load();
        return parent::getPasswd();
    }

    public function setCttime($cttime)
    {
        $this->__load();
        return parent::setCttime($cttime);
    }

    public function getCttime()
    {
        $this->__load();
        return parent::getCttime();
    }

    public function setLastLoginTime($lastLoginTime)
    {
        $this->__load();
        return parent::setLastLoginTime($lastLoginTime);
    }

    public function getLastLoginTime()
    {
        $this->__load();
        return parent::getLastLoginTime();
    }

    public function setLastLoginIp($lastLoginIp)
    {
        $this->__load();
        return parent::setLastLoginIp($lastLoginIp);
    }

    public function getLastLoginIp()
    {
        $this->__load();
        return parent::getLastLoginIp();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'username', 'passwd', 'cttime', 'lastLoginTime', 'lastLoginIp');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}