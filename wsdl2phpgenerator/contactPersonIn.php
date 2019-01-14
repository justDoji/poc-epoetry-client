<?php

namespace OpenEuropa\ePoetry\Type;

class contactPersonIn
{

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var contactRole $roleCode
     */
    protected $roleCode = null;

    /**
     * @param string $userId
     * @param contactRole $roleCode
     */
    public function __construct($userId, $roleCode)
    {
      $this->userId = $userId;
      $this->roleCode = $roleCode;
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
     * @return \OpenEuropa\ePoetry\Type\contactPersonIn
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
     * @return \OpenEuropa\ePoetry\Type\contactPersonIn
     */
    public function setRoleCode($roleCode)
    {
      $this->roleCode = $roleCode;
      return $this;
    }

}
