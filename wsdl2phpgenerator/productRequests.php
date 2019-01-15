<?php

namespace OpenEuropa\EPoetry\Type;

class productRequests
{

    /**
     * @var productRequest $productRequest
     */
    protected $productRequest = null;

    /**
     * @param productRequest $productRequest
     */
    public function __construct($productRequest)
    {
      $this->productRequest = $productRequest;
    }

    /**
     * @return productRequest
     */
    public function getProductRequest()
    {
      return $this->productRequest;
    }

    /**
     * @param productRequest $productRequest
     * @return \OpenEuropa\EPoetry\Type\productRequests
     */
    public function setProductRequest($productRequest)
    {
      $this->productRequest = $productRequest;
      return $this;
    }

}
