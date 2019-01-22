<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class Contacts implements RequestInterface, ResultInterface
{
    /**
     * @var array \OpenEuropa\EPoetry\Type\ContactPerson
     */
    private $contact;

    /**
     * @return array \OpenEuropa\EPoetry\Type\ContactPerson
     */
    public function getContact(): array
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
        $new->contact[] = $contact;

        return $new;
    }
}
