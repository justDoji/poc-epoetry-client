<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class Contacts implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\ContactPerson
     */
    private $contact;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\ContactPerson $contact
     */
    public function __construct(ContactPerson $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\ContactPerson
     */
    public function getContact(): ContactPerson
    {
        return $this->contact;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\ContactPerson $contact
     * @return Contacts
     */
    public function withContact(ContactPerson $contact): Contacts
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }
}
