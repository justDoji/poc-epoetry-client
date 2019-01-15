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
     * @var \OpenEuropa\EPoetry\Type\contactRole
     */
    private $roleCode;

    /**
     * Constructor
     *
     * @var string $firstName
     * @var string $lastName
     * @var string $email
     * @var string $userId
     * @var \OpenEuropa\EPoetry\Type\contactRole $roleCode
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
     * @return ContactPerson
     */
    public function withFirstName($firstName)
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
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
     * @return ContactPerson
     */
    public function withLastName($lastName)
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
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
     * @return ContactPerson
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
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
     * @return ContactPerson
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
     * @return ContactPerson
     */
    public function withRoleCode($roleCode)
    {
        $new = clone $this;
        $new->roleCode = $roleCode;

        return $new;
    }
}
