<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequests implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\productRequest
     */
    private $productRequest;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\productRequest $productRequest
     */
    public function __construct($productRequest)
    {
        $this->productRequest = $productRequest;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\productRequest
     */
    public function getProductRequest(): productRequest
    {
        return $this->productRequest;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\productRequest $productRequest
     * @return ProductRequests
     */
    public function withProductRequest(productRequest $productRequest): ProductRequests
    {
        $new = clone $this;
        $new->productRequest = $productRequest;

        return $new;
    }
}
