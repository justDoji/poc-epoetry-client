<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\language
     */
    private $language;

    /**
     * @var \DateTime
     */
    private $requestedDeadline;

    /**
     * @var \DateTime
     */
    private $acceptedDeadline;

    /**
     * @var string
     */
    private $formatCode;

    /**
     * @var string
     */
    private $statusCode;

    /**
     * @var bool
     */
    private $trackChanges;

    /**
     * @var string
     */
    private $internalProductReference;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\language $language
     * @var \DateTime $requestedDeadline
     * @var \DateTime $acceptedDeadline
     * @var string $formatCode
     * @var string $statusCode
     * @var bool $trackChanges
     * @var string $internalProductReference
     */
    public function __construct(language $language, \DateTime $requestedDeadline, \DateTime $acceptedDeadline, string $formatCode, string $statusCode, bool $trackChanges, string $internalProductReference)
    {
        $this->language = $language;
        $this->requestedDeadline = $requestedDeadline;
        $this->acceptedDeadline = $acceptedDeadline;
        $this->formatCode = $formatCode;
        $this->statusCode = $statusCode;
        $this->trackChanges = $trackChanges;
        $this->internalProductReference = $internalProductReference;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\language
     */
    public function getLanguage(): language
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\language $language
     * @return ProductRequest
     */
    public function withLanguage(language $language): ProductRequest
    {
        $new = clone $this;
        $new->language = $language;

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
     * @return ProductRequest
     */
    public function withRequestedDeadline(\DateTime $requestedDeadline): ProductRequest
    {
        $new = clone $this;
        $new->requestedDeadline = $requestedDeadline;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedDeadline(): \DateTime
    {
        return $this->acceptedDeadline;
    }

    /**
     * @param \DateTime $acceptedDeadline
     * @return ProductRequest
     */
    public function withAcceptedDeadline(\DateTime $acceptedDeadline): ProductRequest
    {
        $new = clone $this;
        $new->acceptedDeadline = $acceptedDeadline;

        return $new;
    }

    /**
     * @return string
     */
    public function getFormatCode(): string
    {
        return $this->formatCode;
    }

    /**
     * @param string $formatCode
     * @return ProductRequest
     */
    public function withFormatCode(string $formatCode): ProductRequest
    {
        $new = clone $this;
        $new->formatCode = $formatCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return ProductRequest
     */
    public function withStatusCode(string $statusCode): ProductRequest
    {
        $new = clone $this;
        $new->statusCode = $statusCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function isTrackChanges(): bool
    {
        return $this->trackChanges;
    }

    /**
     * @param bool $trackChanges
     * @return ProductRequest
     */
    public function withTrackChanges(bool $trackChanges): ProductRequest
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternalProductReference(): string
    {
        return $this->internalProductReference;
    }

    /**
     * @param string $internalProductReference
     * @return ProductRequest
     */
    public function withInternalProductReference(string $internalProductReference): ProductRequest
    {
        $new = clone $this;
        $new->internalProductReference = $internalProductReference;

        return $new;
    }
}
