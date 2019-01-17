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
     * @var string
     */
    private $roleCode;

    /**
     * Constructor
     *
     * @var string $userId
     * @var string $roleCode
     *   A ContactRole code.
     */
    public function __construct(string $userId, string $roleCode)
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
     * @return string
     */
    public function getRoleCode(): string
    {
        return $this->roleCode;
    }

    /**
     * @param string $roleCode
     * @return ContactPersonIn
     */
    public function withRoleCode(string $roleCode): ContactPersonIn
    {
        $new = clone $this;
        $new->roleCode = $roleCode;

        return $new;
    }
}
