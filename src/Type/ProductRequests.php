<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequests implements RequestInterface, ResultInterface
{

    /**
     * @var array \OpenEuropa\EPoetry\Type\ProductRequestInterface
     */
    private $productRequest = [];

    /**
     * @return array \OpenEuropa\EPoetry\Type\ProductRequestInterface
     */
    public function getProductRequest(): array
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
        $new->productRequest[] = $productRequest;

        return $new;
    }
}
