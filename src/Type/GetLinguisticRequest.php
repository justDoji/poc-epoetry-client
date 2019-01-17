<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetLinguisticRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\RequestReferenceIn
     */
    private $request;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\RequestReferenceIn $request
     */
    public function __construct(RequestReferenceIn $request)
    {
        $this->request = $request;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\RequestReferenceIn
     */
    public function getRequest(): RequestReferenceIn
    {
        return $this->request;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\RequestReferenceIn $request
     * @return GetLinguisticRequest
     */
    public function withRequest(RequestReferenceIn $request): GetLinguisticRequest
    {
        $new = clone $this;
        $new->request = $request;

        return $new;
    }
}
