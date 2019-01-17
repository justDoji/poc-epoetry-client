<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ContactPerson implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     *
     */
    private $roleCode;

    /**
     * Constructor
     *
     * @var string $firstName
     * @var string $lastName
     * @var string $email
     * @var string $userId
     * @var string $roleCode
     *   A ContactRole code.
     */
    public function __construct(string $firstName, string $lastName, string $email, string $userId, string $roleCode)
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
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ContactPerson
     */
    public function withFirstName(string $firstName): ContactPerson
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ContactPerson
     */
    public function withLastName(string $lastName): ContactPerson
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ContactPerson
     */
    public function withEmail(string $email): ContactPerson
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
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
     * @return ContactPerson
     */
    public function withUserId(string $userId): ContactPerson
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
     * @return ContactPerson
     */
    public function withRoleCode(string $roleCode): ContactPerson
    {
        $new = clone $this;
        $new->roleCode = $roleCode;

        return $new;
    }
}
