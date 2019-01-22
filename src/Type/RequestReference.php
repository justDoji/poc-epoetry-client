<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class RequestReference implements RequestInterface, ResultInterface
{

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
     * @var int
     */
    private $version;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $internalReference;

    /**
     * @var string
     */
    private $internalTechnicalId;

    /**
     * @var string
     */
    private $productType;

    /**
     * @var string
     */
    private $requesterCode;

    /**
     * Constructor
     *
     * @var int $year
     * @var int $number
     * @var int $part
     * @var int $version
     * @var int $id
     * @var string $internalReference
     * @var string $internalTechnicalId
     * @var string $productType
     * @var string $requesterCode
     */
    public function __construct(int $year, int $number, int $part, int $version, int $id, string $internalReference, string $internalTechnicalId, string $productType, string $requesterCode)
    {
        $this->year = $year;
        $this->number = $number;
        $this->part = $part;
        $this->version = $version;
        $this->id = $id;
        $this->internalReference = $internalReference;
        $this->internalTechnicalId = $internalTechnicalId;
        $this->productType = $productType;
        $this->requesterCode = $requesterCode;
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
     * @return RequestReference
     */
    public function withYear(int $year): RequestReference
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
     * @return RequestReference
     */
    public function withNumber(int $number): RequestReference
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
     * @return RequestReference
     */
    public function withPart(int $part): RequestReference
    {
        $new = clone $this;
        $new->part = $part;

        return $new;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @return RequestReference
     */
    public function withVersion(int $version): RequestReference
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RequestReference
     */
    public function withId(int $id): RequestReference
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternalReference(): string
    {
        return $this->internalReference;
    }

    /**
     * @param string $internalReference
     * @return RequestReference
     */
    public function withInternalReference(string $internalReference): RequestReference
    {
        $new = clone $this;
        $new->internalReference = $internalReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternalTechnicalId(): string
    {
        return $this->internalTechnicalId;
    }

    /**
     * @param string $internalTechnicalId
     * @return RequestReference
     */
    public function withInternalTechnicalId(string $internalTechnicalId): RequestReference
    {
        $new = clone $this;
        $new->internalTechnicalId = $internalTechnicalId;

        return $new;
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }

    /**
     * @param string $productType
     * @return RequestReference
     */
    public function withProductType(string $productType): RequestReference
    {
        $new = clone $this;
        $new->productType = $productType;

        return $new;
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
     * @return RequestReference
     */
    public function withRequesterCode(string $requesterCode): RequestReference
    {
        $new = clone $this;
        $new->requesterCode = $requesterCode;

        return $new;
    }
}
