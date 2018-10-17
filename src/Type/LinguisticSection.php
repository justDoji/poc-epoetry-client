<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSection implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\language
     */
    private $language;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\language $language
     */
    public function __construct($language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\language $language
     * @return LinguisticSection
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }


}

