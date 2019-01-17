<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

/**
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
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
     * @var string
     */
    private $destinationCode;

    /**
     * @var string
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
     * @var string
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
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     *
     * @var string $title
     * @var string $internalReference
     * @var string $internalTechnicalId
     * @var \DateTime $requestedDeadline
     * @var bool $sensitive
     * @var bool $documentToBeAdopted
     * @var string $decideReference
     * @var bool $sentViaRUE
     * @var string $destinationCode
     *   A Destination code.
     * @var string$slaAnnex
     *   A slaAnnex code.
     * @var string $slaCommitment
     * @var string $comment
     * @var string $onBehalfOf
     * @var string $accessibleTo
     *   An AccessLevel code.
     * @var string $requestingService
     * @var string $serviceOfOrigin
     */
    public function __construct(string $title, string $internalReference, string $internalTechnicalId, \DateTime $requestedDeadline, bool $sensitive, bool $documentToBeAdopted, string $decideReference, bool $sentViaRUE, string $destinationCode, string $slaAnnex, string $slaCommitment, string $comment, string $onBehalfOf, string $accessibleTo, string $requestingService, string $serviceOfOrigin)
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return RequestGeneralInfo
     */
    public function withTitle(string $title): RequestGeneralInfo
    {
        $new = clone $this;
        $new->title = $title;

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
     * @return RequestGeneralInfo
     */
    public function withInternalReference(string $internalReference): RequestGeneralInfo
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
     * @return RequestGeneralInfo
     */
    public function withInternalTechnicalId(string $internalTechnicalId): RequestGeneralInfo
    {
        $new = clone $this;
        $new->internalTechnicalId = $internalTechnicalId;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getRequestedDeadline(): \DateTime
    {
        return $this->requestedDeadline;
    }

    /**
     * @param \DateTime $requestedDeadline
     * @return RequestGeneralInfo
     */
    public function withRequestedDeadline(\DateTime $requestedDeadline): RequestGeneralInfo
    {
        $new = clone $this;
        $new->requestedDeadline = $requestedDeadline;

        return $new;
    }

    /**
     * @return bool
     */
    public function isSensitive(): bool
    {
        return $this->sensitive;
    }

    /**
     * @param bool $sensitive
     * @return RequestGeneralInfo
     */
    public function withSensitive(bool $sensitive): RequestGeneralInfo
    {
        $new = clone $this;
        $new->sensitive = $sensitive;

        return $new;
    }

    /**
     * @return bool
     */
    public function isDocumentToBeAdopted(): bool
    {
        return $this->documentToBeAdopted;
    }

    /**
     * @param bool $documentToBeAdopted
     * @return RequestGeneralInfo
     */
    public function withDocumentToBeAdopted(bool $documentToBeAdopted): RequestGeneralInfo
    {
        $new = clone $this;
        $new->documentToBeAdopted = $documentToBeAdopted;

        return $new;
    }

    /**
     * @return string
     */
    public function getDecideReference(): string
    {
        return $this->decideReference;
    }

    /**
     * @param string $decideReference
     * @return RequestGeneralInfo
     */
    public function withDecideReference(string $decideReference): RequestGeneralInfo
    {
        $new = clone $this;
        $new->decideReference = $decideReference;

        return $new;
    }

    /**
     * @return bool
     */
    public function isSentViaRUE(): bool
    {
        return $this->sentViaRUE;
    }

    /**
     * @param bool $sentViaRUE
     * @return RequestGeneralInfo
     */
    public function withSentViaRUE(bool $sentViaRUE): RequestGeneralInfo
    {
        $new = clone $this;
        $new->sentViaRUE = $sentViaRUE;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinationCode(): string
    {
        return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     * @return RequestGeneralInfo
     */
    public function withDestinationCode(string $destinationCode): RequestGeneralInfo
    {
        $new = clone $this;
        $new->destinationCode = $destinationCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getSlaAnnex(): string
    {
        return $this->slaAnnex;
    }

    /**
     * @param string $slaAnnex
     * @return RequestGeneralInfo
     */
    public function withSlaAnnex(string $slaAnnex): RequestGeneralInfo
    {
        $new = clone $this;
        $new->slaAnnex = $slaAnnex;

        return $new;
    }

    /**
     * @return string
     */
    public function getSlaCommitment(): string
    {
        return $this->slaCommitment;
    }

    /**
     * @param string $slaCommitment
     * @return RequestGeneralInfo
     */
    public function withSlaCommitment(string $slaCommitment): RequestGeneralInfo
    {
        $new = clone $this;
        $new->slaCommitment = $slaCommitment;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return RequestGeneralInfo
     */
    public function withComment(string $comment): RequestGeneralInfo
    {
        $new = clone $this;
        $new->comment = $comment;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnBehalfOf(): string
    {
        return $this->onBehalfOf;
    }

    /**
     * @param string $onBehalfOf
     * @return RequestGeneralInfo
     */
    public function withOnBehalfOf(string $onBehalfOf): RequestGeneralInfo
    {
        $new = clone $this;
        $new->onBehalfOf = $onBehalfOf;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccessibleTo(): string
    {
        return $this->accessibleTo;
    }

    /**
     * @param string $accessibleTo
     * @return RequestGeneralInfo
     */
    public function withAccessibleTo(string $accessibleTo): RequestGeneralInfo
    {
        $new = clone $this;
        $new->accessibleTo = $accessibleTo;

        return $new;
    }

    /**
     * @return string
     */
    public function getRequestingService(): string
    {
        return $this->requestingService;
    }

    /**
     * @param string $requestingService
     * @return RequestGeneralInfo
     */
    public function withRequestingService(string $requestingService): RequestGeneralInfo
    {
        $new = clone $this;
        $new->requestingService = $requestingService;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceOfOrigin(): string
    {
        return $this->serviceOfOrigin;
    }

    /**
     * @param string $serviceOfOrigin
     * @return RequestGeneralInfo
     */
    public function withServiceOfOrigin(string $serviceOfOrigin): RequestGeneralInfo
    {
        $new = clone $this;
        $new->serviceOfOrigin = $serviceOfOrigin;

        return $new;
    }
}
