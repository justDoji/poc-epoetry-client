<?php

namespace OpenEuropa\ePoetry\Type;

class getLinguisticRequest
{

    /**
     * @var requestReferenceIn $request
     */
    protected $request = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return requestReferenceIn
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param requestReferenceIn $request
     * @return \OpenEuropa\ePoetry\Type\getLinguisticRequest
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
