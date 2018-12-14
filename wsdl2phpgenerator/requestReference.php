<?php

namespace OpenEuropa\ePoetry\Type;

class requestReference
{

    /**
     * @var int $year
     */
    protected $year = null;

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @var int $part
     */
    protected $part = null;

    /**
     * @var int $version
     */
    protected $version = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $internalReference
     */
    protected $internalReference = null;

    /**
     * @var string $internalTechnicalId
     */
    protected $internalTechnicalId = null;

    /**
     * @var string $productType
     */
    protected $productType = null;

    /**
     * @var string $requesterCode
     */
    protected $requesterCode = null;

    /**
     * @param int $year
     * @param int $number
     * @param int $part
     * @param int $version
     * @param int $id
     * @param string $internalReference
     * @param string $internalTechnicalId
     * @param string $productType
     * @param string $requesterCode
     */
    public function __construct($year, $number, $part, $version, $id, $internalReference, $internalTechnicalId, $productType, $requesterCode)
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
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param int $year
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setYear($year)
    {
      $this->year = $year;
      return $this;
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
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
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
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setPart($part)
    {
      $this->part = $part;
      return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param int $version
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference()
    {
      return $this->internalReference;
    }

    /**
     * @param string $internalReference
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setInternalReference($internalReference)
    {
      $this->internalReference = $internalReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalTechnicalId()
    {
      return $this->internalTechnicalId;
    }

    /**
     * @param string $internalTechnicalId
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setInternalTechnicalId($internalTechnicalId)
    {
      $this->internalTechnicalId = $internalTechnicalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductType()
    {
      return $this->productType;
    }

    /**
     * @param string $productType
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setProductType($productType)
    {
      $this->productType = $productType;
      return $this;
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
     * @return \OpenEuropa\ePoetry\Type\requestReference
     */
    public function setRequesterCode($requesterCode)
    {
      $this->requesterCode = $requesterCode;
      return $this;
    }

}
