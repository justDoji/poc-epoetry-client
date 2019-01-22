<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CorrectTranslation implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\ProductReference
     */
    private $product;

    /**
     * @var \OpenEuropa\EPoetry\Type\CorrectionDocument
     */
    private $correction;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\ProductReference $product
     * @var \OpenEuropa\EPoetry\Type\CorrectionDocument $correction
     */
    public function __construct(ProductReference $product, CorrectionDocument $correction)
    {
        $this->product = $product;
        $this->correction = $correction;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\ProductReference
     */
    public function getProduct(): ProductReference
    {
        return $this->product;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\ProductReference $product
     * @return CorrectTranslation
     */
    public function withProduct(ProductReference $product): CorrectTranslation
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\CorrectionDocument
     */
    public function getCorrection(): CorrectionDocument
    {
        return $this->correction;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\CorrectionDocument $correction
     * @return CorrectTranslation
     */
    public function withCorrection(CorrectionDocument $correction): CorrectTranslation
    {
        $new = clone $this;
        $new->correction = $correction;

        return $new;
    }
}
