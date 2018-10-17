<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequests implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\productRequest
     */
    private $productRequest;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\productRequest $productRequest
     */
    public function __construct($productRequest)
    {
        $this->productRequest = $productRequest;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function getProductRequest()
    {
        return $this->productRequest;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\productRequest $productRequest
     * @return ProductRequests
     */
    public function withProductRequest($productRequest)
    {
        $new = clone $this;
        $new->productRequest = $productRequest;

        return $new;
    }


}

