<?php

namespace Myweb\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *  @ORM\Entity
 *  @ORM\Table(name="admin")
 */
class Admin
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string",length=50)
     */
    private $username;

    /**
     * @var string
     * @ORM\Column(type="string",length=32)
     */
    private $passwd;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $cttime;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $lastLoginTime;

    /**
     * @var string
     * @ORM\Column(type="string",length=128)
     */
    private $lastLoginIp;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Admin
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return Admin
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    
        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set cttime
     *
     * @param integer $cttime
     * @return Admin
     */
    public function setCttime($cttime)
    {
        $this->cttime = $cttime;
    
        return $this;
    }

    /**
     * Get cttime
     *
     * @return integer 
     */
    public function getCttime()
    {
        return $this->cttime;
    }

    /**
     * Set lastLoginTime
     *
     * @param integer $lastLoginTime
     * @return Admin
     */
    public function setLastLoginTime($lastLoginTime)
    {
        $this->lastLoginTime = $lastLoginTime;
    
        return $this;
    }

    /**
     * Get lastLoginTime
     *
     * @return integer 
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

    /**
     * Set lastLoginIp
     *
     * @param string $lastLoginIp
     * @return Admin
     */
    public function setLastLoginIp($lastLoginIp)
    {
        $this->lastLoginIp = $lastLoginIp;
    
        return $this;
    }

    /**
     * Get lastLoginIp
     *
     * @return string 
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }
}
