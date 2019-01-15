<?php

namespace OpenEuropa\EPoetry\Type;

class languageIn
{

    /**
     * @var languageCode $code
     */
    protected $code = null;

    /**
     * @param languageCode $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return languageCode
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param languageCode $code
     * @return \OpenEuropa\EPoetry\Type\languageIn
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
