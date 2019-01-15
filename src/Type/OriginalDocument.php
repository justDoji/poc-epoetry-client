<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class OriginalDocument implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\linguisticSections
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
     * @var \OpenEuropa\EPoetry\Type\linguisticSections $linguisticSections
     * @var bool $trackChanges
     * @var float $pages
     */
    public function __construct($linguisticSections, $trackChanges, $pages)
    {
        $this->linguisticSections = $linguisticSections;
        $this->trackChanges = $trackChanges;
        $this->pages = $pages;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\linguisticSections
     */
    public function getLinguisticSections()
    {
        return $this->linguisticSections;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\linguisticSections $linguisticSections
     * @return OriginalDocument
     */
    public function withLinguisticSections($linguisticSections)
    {
        $new = clone $this;
        $new->linguisticSections = $linguisticSections;

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
     * @return OriginalDocument
     */
    public function withTrackChanges($trackChanges)
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
    }

    /**
     * @return float
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param float $pages
     * @return OriginalDocument
     */
    public function withPages($pages)
    {
        $new = clone $this;
        $new->pages = $pages;

        return $new;
    }
}
