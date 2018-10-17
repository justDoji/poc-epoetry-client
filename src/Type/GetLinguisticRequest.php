<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetLinguisticRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    private $request;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\requestReferenceIn $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\requestReferenceIn $request
     * @return GetLinguisticRequest
     */
    public function withRequest($request)
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }


}

