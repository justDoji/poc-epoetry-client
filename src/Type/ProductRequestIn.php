<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequestIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\languageIn
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
     * @var \OpenEuropa\EPoetry\Type\languageIn $language
     * @var \DateTime $requestedDeadline
     * @var string $internalProductReference
     * @var bool $trackChanges
     */
    public function __construct(languageIn $language, \DateTime $requestedDeadline, string $internalProductReference, bool $trackChanges)
    {
        $this->language = $language;
        $this->requestedDeadline = $requestedDeadline;
        $this->internalProductReference = $internalProductReference;
        $this->trackChanges = $trackChanges;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\languageIn
     */
    public function getLanguage(): languageIn
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\languageIn $language
     * @return ProductRequestIn
     */
    public function withLanguage(languageIn $language): ProductRequestIn
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
     * @return ProductRequestIn
     */
    public function withRequestedDeadline(\DateTime $requestedDeadline): ProductRequestIn
    {
        $new = clone $this;
        $new->requestedDeadline = $requestedDeadline;

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
     * @return ProductRequestIn
     */
    public function withInternalProductReference(string $internalProductReference): ProductRequestIn
    {
        $new = clone $this;
        $new->internalProductReference = $internalProductReference;

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
     * @return ProductRequestIn
     */
    public function withTrackChanges(bool $trackChanges): ProductRequestIn
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
    }
}
