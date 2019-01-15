<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSectionIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\languageIn
     */
    private $language;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\languageIn $language
     */
    public function __construct(languageIn $language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\languageIn
     */
    public function getLanguage(): languageIn
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\languageIn $language
     * @return LinguisticSectionIn
     */
    public function withLanguage(languageIn $language): LinguisticSectionIn
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
