<?php

namespace OpenEuropa\ePoetry\Type;

class MissingOrInvalidParameterException
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
     * @return \OpenEuropa\ePoetry\Type\MissingOrInvalidParameterException
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
     * @return \OpenEuropa\ePoetry\Type\MissingOrInvalidParameterException
     */
    public function setUid($uid)
    {
      $this->uid = $uid;
      return $this;
    }

}
