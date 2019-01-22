<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductRequestIn implements ProductRequestInterface, RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\LanguageIn
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
     * @var \OpenEuropa\EPoetry\Type\LanguageInterface $language
     * @var \DateTime $requestedDeadline
     * @var string $internalProductReference
     * @var bool $trackChanges
     */
    public function __construct(LanguageInterface $language, \DateTime $requestedDeadline, string $internalProductReference, bool $trackChanges)
    {
        $this->language = $language;
        $this->requestedDeadline = $requestedDeadline;
        $this->internalProductReference = $internalProductReference;
        $this->trackChanges = $trackChanges;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\LanguageInterface
     */
    public function getLanguage(): LanguageInterface
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\LanguageInterface $language
     * @return ProductRequestIn
     */
    public function withLanguage(LanguageInterface $language): ProductRequestInterface
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
    public function withRequestedDeadline(\DateTime $requestedDeadline): ProductRequestInterface
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
    public function withInternalProductReference(string $internalProductReference): ProductRequestInterface
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
    public function withTrackChanges(bool $trackChanges): ProductRequestInterface
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
    }
}
