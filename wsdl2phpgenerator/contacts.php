<?php

namespace OpenEuropa\ePoetry\Type;

class contacts
{

    /**
     * @var contactPerson $contact
     */
    protected $contact = null;

    /**
     * @param contactPerson $contact
     */
    public function __construct($contact)
    {
      $this->contact = $contact;
    }

    /**
     * @return contactPerson
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param contactPerson $contact
     * @return \OpenEuropa\ePoetry\Type\contacts
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

}
