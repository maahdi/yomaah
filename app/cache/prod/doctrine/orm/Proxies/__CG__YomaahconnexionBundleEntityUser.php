<?php

namespace Proxies\__CG__\Yomaah\connexionBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \Yomaah\connexionBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function addSite(\Yomaah\structureBundle\Entity\Site $site)
    {
        $this->__load();
        return parent::addSite($site);
    }

    public function removeSite(\Yomaah\structureBundle\Entity\Site $site)
    {
        $this->__load();
        return parent::removeSite($site);
    }

    public function getSites()
    {
        $this->__load();
        return parent::getSites();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function setGroup(\Yomaah\connexionBundle\Entity\Group $group = NULL)
    {
        $this->__load();
        return parent::setGroup($group);
    }

    public function getGroup()
    {
        $this->__load();
        return parent::getGroup();
    }

    public function setIdUser($id)
    {
        $this->__load();
        return parent::setIdUser($id);
    }

    public function getIdUser()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["idUser"];
        }
        $this->__load();
        return parent::getIdUser();
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'idUser', 'login', 'password', 'group', 'sites');
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