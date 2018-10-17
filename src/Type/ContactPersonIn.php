<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ContactPersonIn implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $userId;

    /**
     * @var \OpenEuropa\ePoetry\Type\contactRole
     */
    private $roleCode;

    /**
     * Constructor
     *
     * @var string $userId
     * @var \OpenEuropa\ePoetry\Type\contactRole $roleCode
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
     * @return ContactPersonIn
     */
    public function withUserId($userId)
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\contactRole
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\contactRole $roleCode
     * @return ContactPersonIn
     */
    public function withRoleCode($roleCode)
    {
        $new = clone $this;
        $new->roleCode = $roleCode;

        return $new;
    }


}

