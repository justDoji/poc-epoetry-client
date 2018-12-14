<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class createRequestsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var linguisticRequest[] $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return linguisticRequest[]
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param linguisticRequest[] $return
     * @return \OpenEuropa\ePoetry\Type\createRequestsResponse
     */
    public function setReturn(array $return = null)
    {
      $this->return = $return;
      return $this;
    }

}
