<?php

namespace Login\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTable
 */
class UserTable
{
    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $userFirstname;

    /**
     * @var string
     */
    private $userEmail;

    /**
     * @var string
     */
    private $userPassword;

    /**
     * @var integer
     */
    private $userId;


    /**
     * Set userName
     *
     * @param string $userName
     * @return UserTable
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userFirstname
     *
     * @param string $userFirstname
     * @return UserTable
     */
    public function setUserFirstname($userFirstname)
    {
        $this->userFirstname = $userFirstname;
    
        return $this;
    }

    /**
     * Get userFirstname
     *
     * @return string 
     */
    public function getUserFirstname()
    {
        return $this->userFirstname;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return UserTable
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    
        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return UserTable
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    
        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
