<?php

namespace OpenEuropa\EPoetry\Type;

interface ContactPersonInterface
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
     * @return string
     */
    public function getUserId(): string;

    /**
     * @param string $userId
     * @return ContactPersonIn
     */
    public function withUserId(string $userId): ContactPersonInterface;

    /**
     * @return string
     */
    public function getRoleCode(): string;

    /**
     * @param string $roleCode
     * @return ContactPersonIn
     */
    public function withRoleCode(string $roleCode): ContactPersonInterface;
}
