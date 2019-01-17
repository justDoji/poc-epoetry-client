<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSectionIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\LanguageIn
     */
    private $language;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\LanguageIn $language
     */
    public function __construct(LanguageIn $language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\LanguageIn
     */
    public function getLanguage(): LanguageIn
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\LanguageIn $language
     * @return LinguisticSectionIn
     */
    public function withLanguage(LanguageIn $language): LinguisticSectionIn
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
