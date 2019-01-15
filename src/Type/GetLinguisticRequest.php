<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetLinguisticRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\requestReferenceIn
     */
    private $request;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\requestReferenceIn $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\requestReferenceIn
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\requestReferenceIn $request
     * @return GetLinguisticRequest
     */
    public function withRequest($request)
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }


}

