<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequests implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\ProductRequestInterface
     */
    private $productRequest;

    /**
     * Constructor
     *
     * @param \OpenEuropa\EPoetry\Type\ProductRequestInterface $productRequest
     */
    public function __construct(ProductRequestInterface $productRequest)
    {
        $this->productRequest = $productRequest;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\ProductRequestInterface
     */
    public function getProductRequest(): ProductRequestInterface
    {
        return $this->productRequest;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\ProductRequestInterface $productRequest
     * @return ProductRequests
     */
    public function withProductRequest(ProductRequestInterface $productRequest): ProductRequests
    {
        $new = clone $this;
        $new->productRequest = $productRequest;

        return $new;
    }
}
