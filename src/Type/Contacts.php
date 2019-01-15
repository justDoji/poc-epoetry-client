<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class Contacts implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\contactPerson
     */
    private $contact;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\contactPerson $contact
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\contactPerson
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\contactPerson $contact
     * @return Contacts
     */
    public function withContact($contact)
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }


}

