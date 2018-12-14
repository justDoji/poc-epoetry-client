<?php

namespace OpenEuropa\ePoetry\Type;

class findLinguisticRequest
{

    /**
     * @var string $requesterCode
     */
    protected $requesterCode = null;

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
     * @var string $productCode
     */
    protected $productCode = null;

    
    public function __construct()
    {
    
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
     * @return \OpenEuropa\ePoetry\Type\findLinguisticRequest
     */
    public function setRequesterCode($requesterCode)
    {
      $this->requesterCode = $requesterCode;
      return $this;
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
     * @return \OpenEuropa\ePoetry\Type\findLinguisticRequest
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
     * @return \OpenEuropa\ePoetry\Type\findLinguisticRequest
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
     * @return \OpenEuropa\ePoetry\Type\findLinguisticRequest
     */
    public function setPart($part)
    {
      $this->part = $part;
      return $this;
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
     * @return \OpenEuropa\ePoetry\Type\findLinguisticRequest
     */
    public function setProductCode($productCode)
    {
      $this->productCode = $productCode;
      return $this;
    }

}
