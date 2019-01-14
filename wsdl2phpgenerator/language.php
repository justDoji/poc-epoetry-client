<?php

namespace OpenEuropa\ePoetry\Type;

class language
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param string $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \OpenEuropa\ePoetry\Type\language
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
