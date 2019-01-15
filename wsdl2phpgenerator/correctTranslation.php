<?php

namespace OpenEuropa\EPoetry\Type;

class correctTranslation
{

    /**
     * @var productReference $product
     */
    protected $product = null;

    /**
     * @var correctionDocument $correction
     */
    protected $correction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return productReference
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param productReference $product
     * @return \OpenEuropa\EPoetry\Type\correctTranslation
     */
    public function setProduct($product)
    {
      $this->product = $product;
      return $this;
    }

    /**
     * @return correctionDocument
     */
    public function getCorrection()
    {
      return $this->correction;
    }

    /**
     * @param correctionDocument $correction
     * @return \OpenEuropa\EPoetry\Type\correctTranslation
     */
    public function setCorrection($correction)
    {
      $this->correction = $correction;
      return $this;
    }

}
