<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class OriginalDocumentIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\linguisticSections
     */
    private $linguisticSections;

    /**
     * @var bool
     */
    private $trackChanges;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\linguisticSections $linguisticSections
     * @var bool $trackChanges
     */
    public function __construct($linguisticSections, $trackChanges)
    {
        $this->linguisticSections = $linguisticSections;
        $this->trackChanges = $trackChanges;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\linguisticSections
     */
    public function getLinguisticSections()
    {
        return $this->linguisticSections;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\linguisticSections $linguisticSections
     * @return OriginalDocumentIn
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
    public function getTrackChanges()
    {
        return $this->trackChanges;
    }

    /**
     * @param bool $trackChanges
     * @return OriginalDocumentIn
     */
    public function withTrackChanges($trackChanges)
    {
        $new = clone $this;
        $new->trackChanges = $trackChanges;

        return $new;
    }


}

