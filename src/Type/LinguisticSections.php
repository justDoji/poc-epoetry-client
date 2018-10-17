<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSections implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\linguisticSection
     */
    private $linguisticSection;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\linguisticSection $linguisticSection
     */
    public function __construct($linguisticSection)
    {
        $this->linguisticSection = $linguisticSection;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\linguisticSection
     */
    public function getLinguisticSection()
    {
        return $this->linguisticSection;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\linguisticSection $linguisticSection
     * @return LinguisticSections
     */
    public function withLinguisticSection($linguisticSection)
    {
        $new = clone $this;
        $new->linguisticSection = $linguisticSection;

        return $new;
    }


}

