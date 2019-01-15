<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CorrectTranslation implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\productReference
     */
    private $product;

    /**
     * @var \OpenEuropa\EPoetry\Type\correctionDocument
     */
    private $correction;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\productReference $product
     * @var \OpenEuropa\EPoetry\Type\correctionDocument $correction
     */
    public function __construct($product, $correction)
    {
        $this->product = $product;
        $this->correction = $correction;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\productReference
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\productReference $product
     * @return CorrectTranslation
     */
    public function withProduct($product)
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\correctionDocument
     */
    public function getCorrection()
    {
        return $this->correction;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\correctionDocument $correction
     * @return CorrectTranslation
     */
    public function withCorrection($correction)
    {
        $new = clone $this;
        $new->correction = $correction;

        return $new;
    }


}

