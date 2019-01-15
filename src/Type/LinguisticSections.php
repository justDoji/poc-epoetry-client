<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSections implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\linguisticSection
     */
    private $linguisticSection;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\linguisticSection $linguisticSection
     */
    public function __construct($linguisticSection)
    {
        $this->linguisticSection = $linguisticSection;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\linguisticSection
     */
    public function getLinguisticSection()
    {
        return $this->linguisticSection;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\linguisticSection $linguisticSection
     * @return LinguisticSections
     */
    public function withLinguisticSection($linguisticSection)
    {
        $new = clone $this;
        $new->linguisticSection = $linguisticSection;

        return $new;
    }
}
