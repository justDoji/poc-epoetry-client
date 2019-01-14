<?php

namespace OpenEuropa\ePoetry\Type;

class contactPerson
{

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var contactRole $roleCode
     */
    protected $roleCode = null;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $userId
     * @param contactRole $roleCode
     */
    public function __construct($firstName, $lastName, $email, $userId, $roleCode)
    {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->email = $email;
      $this->userId = $userId;
      $this->roleCode = $roleCode;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \OpenEuropa\ePoetry\Type\contactPerson
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return \OpenEuropa\ePoetry\Type\contactPerson
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \OpenEuropa\ePoetry\Type\contactPerson
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \OpenEuropa\ePoetry\Type\contactPerson
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return contactRole
     */
    public function getRoleCode()
    {
      return $this->roleCode;
    }

    /**
     * @param contactRole $roleCode
     * @return \OpenEuropa\ePoetry\Type\contactPerson
     */
    public function setRoleCode($roleCode)
    {
      $this->roleCode = $roleCode;
      return $this;
    }

}
