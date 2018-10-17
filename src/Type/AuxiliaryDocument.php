<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocument implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\languageCode
     */
    private $language;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\languageCode $language
     */
    public function __construct($language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\languageCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\languageCode $language
     * @return AuxiliaryDocument
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }


}

