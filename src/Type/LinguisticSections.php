<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSections implements RequestInterface, ResultInterface
{

    /**
     * @var array \OpenEuropa\EPoetry\Type\LinguisticSection
     */
    private $linguisticSection;

    /**
     * @return array \OpenEuropa\EPoetry\Type\LinguisticSection
     */
    public function getLinguisticSection(): array
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
        $new->linguisticSection[] = $linguisticSection;

        return $new;
    }
}
