<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSections implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\LinguisticSection
     */
    private $linguisticSection;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\LinguisticSection $linguisticSection
     */
    public function __construct(LinguisticSection $linguisticSection)
    {
        $this->linguisticSection = $linguisticSection;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\LinguisticSection
     */
    public function getLinguisticSection(): LinguisticSection
    {
        return $this->linguisticSection;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\LinguisticSection $linguisticSection
     * @return LinguisticSections
     */
    public function withLinguisticSection(LinguisticSection $linguisticSection): LinguisticSections
    {
        $new = clone $this;
        $new->linguisticSection = $linguisticSection;

        return $new;
    }
}
