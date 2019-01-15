<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSection implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\language
     */
    private $language;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\language $language
     */
    public function __construct(language $language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\language
     */
    public function getLanguage(): language
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\language $language
     * @return LinguisticSection
     */
    public function withLanguage(language $language): LinguisticSection
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
