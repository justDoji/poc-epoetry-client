<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequestIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\languageIn
     */
    private $language;

    /**
     * @var \DateTime
     */
    private $requestedDeadline;

    /**
     * @var string
     */
    private $internalProductReference;

    /**
     * @var bool
     */
    private $trackChanges;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\languageIn $language
     * @var \DateTime $requestedDeadline
     * @var string $internalProductReference
     * @var bool $trackChanges
     */
    public function __construct($language, $requestedDeadline, $internalProductReference, $trackChanges)
    {
        $this->language = $language;
        $this->requestedDeadline = $requestedDeadline;
        $this->internalProductReference = $internalProductReference;
        $this->trackChanges = $trackChanges;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\languageIn
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\languageIn $language
     * @return ProductRequestIn
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
     * @return ProductRequestIn
     */
    public function withRequestedDeadline($requestedDeadline)
    {
        $new = clone $this;
        $new->requestedDeadline = $requestedDeadline;

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
     * @return ProductRequestIn
     */
    public function withInternalProductReference($internalProductReference)
    {
        $new = clone $this;
        $new->internalProductReference = $internalProductReference;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTrackChanges()
    {
        return $this->trackChanges;
    }

    /**
     * @param bool $trackChanges
     * @return ProductRequestIn
     */
    public function withTrackChanges($trackChanges)
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
    }


}

