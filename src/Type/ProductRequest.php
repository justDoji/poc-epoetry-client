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
    public function __construct($language, $requestedDeadline, $acceptedDeadline, $formatCode, $statusCode, $trackChanges, $internalProductReference)
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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\language $language
     * @return ProductRequest
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

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
     * @return ProductRequest
     */
    public function withRequestedDeadline($requestedDeadline)
    {
        $new = clone $this;
        $new->requestedDeadline = $requestedDeadline;

        return $new;
    }

    /**
     * @return \DateTime
     */
    public function getAcceptedDeadline()
    {
        return $this->acceptedDeadline;
    }

    /**
     * @param \DateTime $acceptedDeadline
     * @return ProductRequest
     */
    public function withAcceptedDeadline($acceptedDeadline)
    {
        $new = clone $this;
        $new->acceptedDeadline = $acceptedDeadline;

        return $new;
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
     * @return ProductRequest
     */
    public function withFormatCode($formatCode)
    {
        $new = clone $this;
        $new->formatCode = $formatCode;

        return $new;
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
     * @return ProductRequest
     */
    public function withStatusCode($statusCode)
    {
        $new = clone $this;
        $new->statusCode = $statusCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function isTrackChanges()
    {
        return $this->trackChanges;
    }

    /**
     * @param bool $trackChanges
     * @return ProductRequest
     */
    public function withTrackChanges($trackChanges)
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
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
     * @return ProductRequest
     */
    public function withInternalProductReference($internalProductReference)
    {
        $new = clone $this;
        $new->internalProductReference = $internalProductReference;

        return $new;
    }
}
