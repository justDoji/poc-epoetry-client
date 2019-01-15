<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class RequestGeneralInfoIn implements RequestInterface, ResultInterface
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
     * @var \OpenEuropa\EPoetry\Type\destination $destinationCode
     * @var \OpenEuropa\EPoetry\Type\slaAnnex $slaAnnex
     * @var string $slaCommitment
     * @var string $comment
     * @var string $onBehalfOf
     * @var \OpenEuropa\EPoetry\Type\accessLevel $accessibleTo
     */
    public function __construct(string $title, string $internalReference, string $internalTechnicalId, \DateTime $requestedDeadline, bool $sensitive, bool $documentToBeAdopted, string $decideReference, $sentViaRUE, $destinationCode, $slaAnnex, string $slaCommitment, string $comment, string $onBehalfOf, $accessibleTo)
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
     * @return RequestGeneralInfoIn
     */
    public function withTitle(string $title): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withInternalReference(string $internalReference): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withInternalTechnicalId(string $internalTechnicalId): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withRequestedDeadline(\DateTime $requestedDeadline): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withSensitive(bool $sensitive): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withDocumentToBeAdopted(bool $documentToBeAdopted): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withDecideReference(string$decideReference): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withSentViaRUE(bool $sentViaRUE): RequestGeneralInfoIn
    {
        $new = clone $this;
        $new->sentViaRUE = $sentViaRUE;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\destination
     */
    public function getDestinationCode(): destination
    {
        return $this->destinationCode;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\destination $destinationCode
     * @return RequestGeneralInfoIn
     */
    public function withDestinationCode(destination $destinationCode): RequestGeneralInfoIn
    {
        $new = clone $this;
        $new->destinationCode = $destinationCode;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\slaAnnex
     */
    public function getSlaAnnex(): slaAnnex
    {
        return $this->slaAnnex;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\slaAnnex $slaAnnex
     * @return RequestGeneralInfoIn
     */
    public function withSlaAnnex(slaAnnex $slaAnnex): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withSlaCommitment(string $slaCommitment): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withComment(string$comment): RequestGeneralInfoIn
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
     * @return RequestGeneralInfoIn
     */
    public function withOnBehalfOf(string $onBehalfOf): RequestGeneralInfoIn
    {
        $new = clone $this;
        $new->onBehalfOf = $onBehalfOf;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\accessLevel
     */
    public function getAccessibleTo(): accessLevel
    {
        return $this->accessibleTo;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\accessLevel $accessibleTo
     * @return RequestGeneralInfoIn
     */
    public function withAccessibleTo(accessLevel $accessibleTo): RequestGeneralInfoIn
    {
        $new = clone $this;
        $new->accessibleTo = $accessibleTo;

        return $new;
    }
}
