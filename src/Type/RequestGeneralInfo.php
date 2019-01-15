<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class RequestGeneralInfo implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $internalReference;

    /**
     * @var string
     */
    private $internalTechnicalId;

    /**
     * @var \DateTime
     */
    private $requestedDeadline;

    /**
     * @var bool
     */
    private $sensitive;

    /**
     * @var bool
     */
    private $documentToBeAdopted;

    /**
     * @var string
     */
    private $decideReference;

    /**
     * @var bool
     */
    private $sentViaRUE;

    /**
     * @var \OpenEuropa\EPoetry\Type\destination
     */
    private $destinationCode;

    /**
     * @var \OpenEuropa\EPoetry\Type\slaAnnex
     */
    private $slaAnnex;

    /**
     * @var string
     */
    private $slaCommitment;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $onBehalfOf;

    /**
     * @var \OpenEuropa\EPoetry\Type\accessLevel
     */
    private $accessibleTo;

    /**
     * @var string
     */
    private $requestingService;

    /**
     * @var string
     */
    private $serviceOfOrigin;

    /**
     * Constructor
     *
     * @var string $title
     * @var string $internalReference
     * @var string $internalTechnicalId
     * @var \DateTime $requestedDeadline
     * @var bool $sensitive
     * @var bool $documentToBeAdopted
     * @var string $decideReference
     * @var bool $sentViaRUE
     * @var \OpenEuropa\EPoetry\Type\destination $destinationCode
     * @var \OpenEuropa\EPoetry\Type\slaAnnex $slaAnnex
     * @var string $slaCommitment
     * @var string $comment
     * @var string $onBehalfOf
     * @var \OpenEuropa\EPoetry\Type\accessLevel $accessibleTo
     * @var string $requestingService
     * @var string $serviceOfOrigin
     */
    public function __construct($title, $internalReference, $internalTechnicalId, $requestedDeadline, $sensitive, $documentToBeAdopted, $decideReference, $sentViaRUE, $destinationCode, $slaAnnex, $slaCommitment, $comment, $onBehalfOf, $accessibleTo, $requestingService, $serviceOfOrigin)
    {
        $this->title = $title;
        $this->internalReference = $internalReference;
        $this->internalTechnicalId = $internalTechnicalId;
        $this->requestedDeadline = $requestedDeadline;
        $this->sensitive = $sensitive;
        $this->documentToBeAdopted = $documentToBeAdopted;
        $this->decideReference = $decideReference;
        $this->sentViaRUE = $sentViaRUE;
        $this->destinationCode = $destinationCode;
        $this->slaAnnex = $slaAnnex;
        $this->slaCommitment = $slaCommitment;
        $this->comment = $comment;
        $this->onBehalfOf = $onBehalfOf;
        $this->accessibleTo = $accessibleTo;
        $this->requestingService = $requestingService;
        $this->serviceOfOrigin = $serviceOfOrigin;
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
     * @return RequestGeneralInfo
     */
    public function withTitle($title)
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withInternalReference($internalReference)
    {
        $new = clone $this;
        $new->internalReference = $internalReference;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withInternalTechnicalId($internalTechnicalId)
    {
        $new = clone $this;
        $new->internalTechnicalId = $internalTechnicalId;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDeadline()
    {
        return $this->requestedDeadline;
    }

    /**
     * @param \DateTime $requestedDeadline
     * @return RequestGeneralInfo
     */
    public function withRequestedDeadline($requestedDeadline)
    {
        $new = clone $this;
        $new->requestedDeadline = $requestedDeadline;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSensitive()
    {
        return $this->sensitive;
    }

    /**
     * @param bool $sensitive
     * @return RequestGeneralInfo
     */
    public function withSensitive($sensitive)
    {
        $new = clone $this;
        $new->sensitive = $sensitive;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDocumentToBeAdopted()
    {
        return $this->documentToBeAdopted;
    }

    /**
     * @param bool $documentToBeAdopted
     * @return RequestGeneralInfo
     */
    public function withDocumentToBeAdopted($documentToBeAdopted)
    {
        $new = clone $this;
        $new->documentToBeAdopted = $documentToBeAdopted;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withDecideReference($decideReference)
    {
        $new = clone $this;
        $new->decideReference = $decideReference;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSentViaRUE()
    {
        return $this->sentViaRUE;
    }

    /**
     * @param bool $sentViaRUE
     * @return RequestGeneralInfo
     */
    public function withSentViaRUE($sentViaRUE)
    {
        $new = clone $this;
        $new->sentViaRUE = $sentViaRUE;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\destination
     */
    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\destination $destinationCode
     * @return RequestGeneralInfo
     */
    public function withDestinationCode($destinationCode)
    {
        $new = clone $this;
        $new->destinationCode = $destinationCode;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\slaAnnex
     */
    public function getSlaAnnex()
    {
        return $this->slaAnnex;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\slaAnnex $slaAnnex
     * @return RequestGeneralInfo
     */
    public function withSlaAnnex($slaAnnex)
    {
        $new = clone $this;
        $new->slaAnnex = $slaAnnex;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withSlaCommitment($slaCommitment)
    {
        $new = clone $this;
        $new->slaCommitment = $slaCommitment;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withComment($comment)
    {
        $new = clone $this;
        $new->comment = $comment;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withOnBehalfOf($onBehalfOf)
    {
        $new = clone $this;
        $new->onBehalfOf = $onBehalfOf;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\accessLevel
     */
    public function getAccessibleTo()
    {
        return $this->accessibleTo;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\accessLevel $accessibleTo
     * @return RequestGeneralInfo
     */
    public function withAccessibleTo($accessibleTo)
    {
        $new = clone $this;
        $new->accessibleTo = $accessibleTo;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withRequestingService($requestingService)
    {
        $new = clone $this;
        $new->requestingService = $requestingService;

        return $new;
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
     * @return RequestGeneralInfo
     */
    public function withServiceOfOrigin($serviceOfOrigin)
    {
        $new = clone $this;
        $new->serviceOfOrigin = $serviceOfOrigin;

        return $new;
    }


}

