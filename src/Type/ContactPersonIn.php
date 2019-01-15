<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ContactPersonIn implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $userId;

    /**
     * @var \OpenEuropa\EPoetry\Type\contactRole
     */
    private $roleCode;

    /**
     * Constructor
     *
     * @var string $userId
     * @var \OpenEuropa\EPoetry\Type\contactRole $roleCode
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
     * @return \OpenEuropa\EPoetry\Type\contactRole
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\contactRole $roleCode
     * @return ContactPersonIn
     */
    public function withRoleCode($roleCode)
    {
        $new = clone $this;
        $new->roleCode = $roleCode;

        return $new;
    }
}
