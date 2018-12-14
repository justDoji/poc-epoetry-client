<?php

namespace OpenEuropa\ePoetry\Type;

class getLinguisticRequestResponse
{

    /**
     * @var linguisticRequest $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return linguisticRequest
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param linguisticRequest $return
     * @return \OpenEuropa\ePoetry\Type\getLinguisticRequestResponse
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
