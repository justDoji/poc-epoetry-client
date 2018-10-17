<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSectionIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\languageIn
     */
    private $language;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\languageIn $language
     */
    public function __construct($language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\languageIn
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\languageIn $language
     * @return LinguisticSectionIn
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }


}

