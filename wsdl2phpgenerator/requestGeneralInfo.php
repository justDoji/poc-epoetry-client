<?php

namespace OpenEuropa\ePoetry\Type;

class requestGeneralInfo
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $internalReference
     */
    protected $internalReference = null;

    /**
     * @var string $internalTechnicalId
     */
    protected $internalTechnicalId = null;

    /**
     * @var \DateTime $requestedDeadline
     */
    protected $requestedDeadline = null;

    /**
     * @var boolean $sensitive
     */
    protected $sensitive = null;

    /**
     * @var boolean $documentToBeAdopted
     */
    protected $documentToBeAdopted = null;

    /**
     * @var string $decideReference
     */
    protected $decideReference = null;

    /**
     * @var boolean $sentViaRUE
     */
    protected $sentViaRUE = null;

    /**
     * @var destination $destinationCode
     */
    protected $destinationCode = null;

    /**
     * @var slaAnnex $slaAnnex
     */
    protected $slaAnnex = null;

    /**
     * @var string $slaCommitment
     */
    protected $slaCommitment = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $onBehalfOf
     */
    protected $onBehalfOf = null;

    /**
     * @var accessLevel $accessibleTo
     */
    protected $accessibleTo = null;

    /**
     * @var string $requestingService
     */
    protected $requestingService = null;

    /**
     * @var string $serviceOfOrigin
     */
    protected $serviceOfOrigin = null;

    /**
     * @param boolean $sensitive
     * @param boolean $documentToBeAdopted
     * @param boolean $sentViaRUE
     */
    public function __construct($sensitive, $documentToBeAdopted, $sentViaRUE)
    {
      $this->sensitive = $sensitive;
      $this->documentToBeAdopted = $documentToBeAdopted;
      $this->sentViaRUE = $sentViaRUE;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setTitle($title)
    {
      $this->title = $title;
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
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
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
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setInternalTechnicalId($internalTechnicalId)
    {
      $this->internalTechnicalId = $internalTechnicalId;
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
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setRequestedDeadline(\DateTime $requestedDeadline = null)
    {
      if ($requestedDeadline == null) {
       $this->requestedDeadline = null;
      } else {
        $this->requestedDeadline = $requestedDeadline->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSensitive()
    {
      return $this->sensitive;
    }

    /**
     * @param boolean $sensitive
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setSensitive($sensitive)
    {
      $this->sensitive = $sensitive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDocumentToBeAdopted()
    {
      return $this->documentToBeAdopted;
    }

    /**
     * @param boolean $documentToBeAdopted
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setDocumentToBeAdopted($documentToBeAdopted)
    {
      $this->documentToBeAdopted = $documentToBeAdopted;
      return $this;
    }

    /**
     * @return string
     */
    public function getDecideReference()
    {
      return $this->decideReference;
    }

    /**
     * @param string $decideReference
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setDecideReference($decideReference)
    {
      $this->decideReference = $decideReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSentViaRUE()
    {
      return $this->sentViaRUE;
    }

    /**
     * @param boolean $sentViaRUE
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setSentViaRUE($sentViaRUE)
    {
      $this->sentViaRUE = $sentViaRUE;
      return $this;
    }

    /**
     * @return destination
     */
    public function getDestinationCode()
    {
      return $this->destinationCode;
    }

    /**
     * @param destination $destinationCode
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setDestinationCode($destinationCode)
    {
      $this->destinationCode = $destinationCode;
      return $this;
    }

    /**
     * @return slaAnnex
     */
    public function getSlaAnnex()
    {
      return $this->slaAnnex;
    }

    /**
     * @param slaAnnex $slaAnnex
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setSlaAnnex($slaAnnex)
    {
      $this->slaAnnex = $slaAnnex;
      return $this;
    }

    /**
     * @return string
     */
    public function getSlaCommitment()
    {
      return $this->slaCommitment;
    }

    /**
     * @param string $slaCommitment
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setSlaCommitment($slaCommitment)
    {
      $this->slaCommitment = $slaCommitment;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnBehalfOf()
    {
      return $this->onBehalfOf;
    }

    /**
     * @param string $onBehalfOf
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setOnBehalfOf($onBehalfOf)
    {
      $this->onBehalfOf = $onBehalfOf;
      return $this;
    }

    /**
     * @return accessLevel
     */
    public function getAccessibleTo()
    {
      return $this->accessibleTo;
    }

    /**
     * @param accessLevel $accessibleTo
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setAccessibleTo($accessibleTo)
    {
      $this->accessibleTo = $accessibleTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestingService()
    {
      return $this->requestingService;
    }

    /**
     * @param string $requestingService
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setRequestingService($requestingService)
    {
      $this->requestingService = $requestingService;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceOfOrigin()
    {
      return $this->serviceOfOrigin;
    }

    /**
     * @param string $serviceOfOrigin
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfo
     */
    public function setServiceOfOrigin($serviceOfOrigin)
    {
      $this->serviceOfOrigin = $serviceOfOrigin;
      return $this;
    }

}
