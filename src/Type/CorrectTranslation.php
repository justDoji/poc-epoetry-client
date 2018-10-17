<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CorrectTranslation implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\productReference
     */
    private $product;

    /**
     * @var \OpenEuropa\ePoetry\Type\correctionDocument
     */
    private $correction;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\productReference $product
     * @var \OpenEuropa\ePoetry\Type\correctionDocument $correction
     */
    public function __construct($product, $correction)
    {
        $this->product = $product;
        $this->correction = $correction;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\productReference
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\productReference $product
     * @return CorrectTranslation
     */
    public function withProduct($product)
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\correctionDocument
     */
    public function getCorrection()
    {
        return $this->correction;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\correctionDocument $correction
     * @return CorrectTranslation
     */
    public function withCorrection($correction)
    {
        $new = clone $this;
        $new->correction = $correction;

        return $new;
    }


}

