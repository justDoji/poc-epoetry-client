<?php

namespace OpenEuropa\EPoetry\Type;

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
    public function __construct(string $requesterCode, int $year, int $number, int $part, string $productCode)
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
    public function getRequesterCode(): string
    {
        return $this->requesterCode;
    }

    /**
     * @param string $requesterCode
     * @return FindLinguisticRequest
     */
    public function withRequesterCode(string $requesterCode): FindLinguisticRequest
    {
        $new = clone $this;
        $new->requesterCode = $requesterCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return FindLinguisticRequest
     */
    public function withYear(int $year): FindLinguisticRequest
    {
        $new = clone $this;
        $new->year = $year;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return FindLinguisticRequest
     */
    public function withNumber(int $number): FindLinguisticRequest
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }

    /**
     * @return int
     */
    public function getPart(): int
    {
        return $this->part;
    }

    /**
     * @param int $part
     * @return FindLinguisticRequest
     */
    public function withPart(int $part): FindLinguisticRequest
    {
        $new = clone $this;
        $new->part = $part;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     * @return FindLinguisticRequest
     */
    public function withProductCode(string $productCode): FindLinguisticRequest
    {
        $new = clone $this;
        $new->productCode = $productCode;

        return $new;
    }
}
