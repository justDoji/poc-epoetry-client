<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class OriginalDocument extends DgtDocument implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\LinguisticSections
     */
    private $linguisticSections;

    /**
     * @var bool
     */
    private $trackChanges;

    /**
     * @var float
     */
    private $pages;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\LinguisticSections $linguisticSections
     * @var bool $trackChanges
     * @var float $pages
     */
    public function __construct(LinguisticSections $linguisticSections, bool $trackChanges, float $pages)
    {
        $this->linguisticSections = $linguisticSections;
        $this->trackChanges = $trackChanges;
        $this->pages = $pages;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\LinguisticSections
     */
    public function getLinguisticSections(): LinguisticSections
    {
        return $this->linguisticSections;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\LinguisticSections $linguisticSections
     * @return OriginalDocument
     */
    public function withLinguisticSections(LinguisticSections $linguisticSections): OriginalDocument
    {
        $new = clone $this;
        $new->linguisticSections = $linguisticSections;

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
     * @return OriginalDocument
     */
    public function withTrackChanges(bool $trackChanges): OriginalDocument
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
    }

    /**
     * @return float
     */
    public function getPages(): float
    {
        return $this->pages;
    }

    /**
     * @param float $pages
     * @return OriginalDocument
     */
    public function withPages(float $pages): OriginalDocument
    {
        $new = clone $this;
        $new->pages = $pages;

        return $new;
    }
}
