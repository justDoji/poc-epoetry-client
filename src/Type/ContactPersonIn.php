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
    public function __construct(string $userId, contactRole $roleCode)
    {
        $this->userId = $userId;
        $this->roleCode = $roleCode;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return ContactPersonIn
     */
    public function withUserId(string $userId): ContactPersonIn
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\contactRole
     */
    public function getRoleCode(): contactRole
    {
        return $this->roleCode;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\contactRole $roleCode
     * @return ContactPersonIn
     */
    public function withRoleCode(contactRole $roleCode): ContactPersonIn
    {
        $new = clone $this;
        $new->roleCode = $roleCode;

        return $new;
    }
}
