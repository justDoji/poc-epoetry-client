<?php

namespace OpenEuropa\EPoetry\Type;

interface ProductRequestInterface
{
    /**
     * @return \OpenEuropa\EPoetry\Type\LanguageInterface
     */
    public function getLanguage(): LanguageInterface;

    /**
     * @param \OpenEuropa\EPoetry\Type\LanguageInterface $language
     * @return ProductRequestInterface
     */
    public function withLanguage(LanguageInterface $language): ProductRequestInterface;

    /**
     * @return \DateTime
     */
    public function getRequestedDeadline(): \DateTime;

    /**
     * @param \DateTime $requestedDeadline
     * @return ProductRequestInterface
     */
    public function withRequestedDeadline(\DateTime $requestedDeadline): ProductRequestInterface;

    /**
     * @return string
     */
    public function getInternalProductReference(): string;

    /**
     * @param string $internalProductReference
     * @return ProductRequestInterface
     */
    public function withInternalProductReference(string $internalProductReference): ProductRequestInterface;

    /**
     * @return bool
     */
    public function isTrackChanges(): bool;

    /**
     * @param bool $trackChanges
     * @return ProductRequestInterface
     */
    public function withTrackChanges(bool $trackChanges): ProductRequestInterface;
}
