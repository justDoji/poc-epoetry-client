<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class FindLinguisticRequest implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $requesterCode;

    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $part;

    /**
     * @var string
     */
    private $productCode;

    /**
     * Constructor
     *
     * @var string $requesterCode
     * @var int $year
     * @var int $number
     * @var int $part
     * @var string $productCode
     */
    public function __construct($requesterCode, $year, $number, $part, $productCode)
    {
        $this->requesterCode = $requesterCode;
        $this->year = $year;
        $this->number = $number;
        $this->part = $part;
        $this->productCode = $productCode;
    }

    /**
     * @return string
     */
    public function getRequesterCode()
    {
        return $this->requesterCode;
    }

    /**
     * @param string $requesterCode
     * @return FindLinguisticRequest
     */
    public function withRequesterCode($requesterCode)
    {
        $new = clone $this;
        $new->requesterCode = $requesterCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return FindLinguisticRequest
     */
    public function withYear($year)
    {
        $new = clone $this;
        $new->year = $year;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return FindLinguisticRequest
     */
    public function withNumber($number)
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    /**
     * @return int
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * @param int $part
     * @return FindLinguisticRequest
     */
    public function withPart($part)
    {
        $new = clone $this;
        $new->part = $part;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return FindLinguisticRequest
     */
    public function withProductCode($productCode)
    {
        $new = clone $this;
        $new->productCode = $productCode;

        return $new;
    }


}

