<?php

namespace OpenEuropa\EPoetry\Type;

class ContactNotFoundException
{

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var string $uid
     */
    protected $uid = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \OpenEuropa\EPoetry\Type\ContactNotFoundException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return string
     */
    public function getUid()
    {
      return $this->uid;
    }

    /**
     * @param string $uid
     * @return \OpenEuropa\EPoetry\Type\ContactNotFoundException
     */
    public function setUid($uid)
    {
      $this->uid = $uid;
      return $this;
    }

}
