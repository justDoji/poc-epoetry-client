<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocument extends DgtDocument implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\languageCode
     */
    private $language;

    /**
     * Constructor
     *
     * @param \OpenEuropa\EPoetry\Type\languageCode $language
     */
    public function __construct(languageCode $language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\languageCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\languageCode $language
     * @return AuxiliaryDocument
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
