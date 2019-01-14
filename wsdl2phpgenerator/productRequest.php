<?php

namespace OpenEuropa\ePoetry\Type;

class productRequest
{

    /**
     * @var language $language
     */
    protected $language = null;

    /**
     * @var \DateTime $requestedDeadline
     */
    protected $requestedDeadline = null;

    /**
     * @var \DateTime $acceptedDeadline
     */
    protected $acceptedDeadline = null;

    /**
     * @var string $formatCode
     */
    protected $formatCode = null;

    /**
     * @var string $statusCode
     */
    protected $statusCode = null;

    /**
     * @var boolean $trackChanges
     */
    protected $trackChanges = null;

    /**
     * @var string $internalProductReference
     */
    protected $internalProductReference = null;

    /**
     * @param \DateTime $requestedDeadline
     * @param \DateTime $acceptedDeadline
     * @param string $formatCode
     * @param string $statusCode
     * @param boolean $trackChanges
     * @param string $internalProductReference
     */
    public function __construct(\DateTime $requestedDeadline, \DateTime $acceptedDeadline, $formatCode, $statusCode, $trackChanges, $internalProductReference)
    {
      $this->requestedDeadline = $requestedDeadline->format(\DateTime::ATOM);
      $this->acceptedDeadline = $acceptedDeadline->format(\DateTime::ATOM);
      $this->formatCode = $formatCode;
      $this->statusCode = $statusCode;
      $this->trackChanges = $trackChanges;
      $this->internalProductReference = $internalProductReference;
    }

    /**
     * @return language
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param language $language
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDeadline()
    {
      if ($this->requestedDeadline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->requestedDeadline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $requestedDeadline
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function setRequestedDeadline(\DateTime $requestedDeadline)
    {
      $this->requestedDeadline = $requestedDeadline->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedDeadline()
    {
      if ($this->acceptedDeadline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->acceptedDeadline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $acceptedDeadline
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function setAcceptedDeadline(\DateTime $acceptedDeadline)
    {
      $this->acceptedDeadline = $acceptedDeadline->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getFormatCode()
    {
      return $this->formatCode;
    }

    /**
     * @param string $formatCode
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function setFormatCode($formatCode)
    {
      $this->formatCode = $formatCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
      return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTrackChanges()
    {
      return $this->trackChanges;
    }

    /**
     * @param boolean $trackChanges
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function setTrackChanges($trackChanges)
    {
      $this->trackChanges = $trackChanges;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalProductReference()
    {
      return $this->internalProductReference;
    }

    /**
     * @param string $internalProductReference
     * @return \OpenEuropa\ePoetry\Type\productRequest
     */
    public function setInternalProductReference($internalProductReference)
    {
      $this->internalProductReference = $internalProductReference;
      return $this;
    }

}
