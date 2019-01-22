<?php

namespace OpenEuropa\EPoetry\Type;

class productRequestIn
{

    /**
     * @var languageIn $language
     */
    protected $language = null;

    /**
     * @var \DateTime $requestedDeadline
     */
    protected $requestedDeadline = null;

    /**
     * @var string $internalProductReference
     */
    protected $internalProductReference = null;

    /**
     * @var boolean $trackChanges
     */
    protected $trackChanges = null;

    /**
     * @param \DateTime $requestedDeadline
     * @param string $internalProductReference
     * @param boolean $trackChanges
     */
    public function __construct(\DateTime $requestedDeadline, $internalProductReference, $trackChanges)
    {
      $this->requestedDeadline = $requestedDeadline->format(\DateTime::ATOM);
      $this->internalProductReference = $internalProductReference;
      $this->trackChanges = $trackChanges;
    }

    /**
     * @return languageIn
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param languageIn $language
     * @return \OpenEuropa\EPoetry\Type\productRequestIn
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
     * @return \OpenEuropa\EPoetry\Type\productRequestIn
     */
    public function setRequestedDeadline(\DateTime $requestedDeadline)
    {
      $this->requestedDeadline = $requestedDeadline->format(\DateTime::ATOM);
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
     * @return \OpenEuropa\EPoetry\Type\productRequestIn
     */
    public function setInternalProductReference($internalProductReference)
    {
      $this->internalProductReference = $internalProductReference;
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
     * @return \OpenEuropa\EPoetry\Type\productRequestIn
     */
    public function setTrackChanges($trackChanges)
    {
      $this->trackChanges = $trackChanges;
      return $this;
    }

}
