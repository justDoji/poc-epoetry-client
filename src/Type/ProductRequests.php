<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequests implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\ProductRequest
     */
    private $productRequest;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\ProductRequest $productRequest
     */
    public function __construct($productRequest)
    {
        $this->productRequest = $productRequest;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\ProductRequest
     */
    public function getProductRequest(): ProductRequest
    {
        return $this->productRequest;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\ProductRequest $productRequest
     * @return ProductRequests
     */
    public function withProductRequest(ProductRequest $productRequest): ProductRequests
    {
        $new = clone $this;
        $new->productRequest = $productRequest;

        return $new;
    }
}
