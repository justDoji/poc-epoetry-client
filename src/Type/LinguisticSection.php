<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticSection implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\Language
     */
    private $language;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\Language $language
     */
    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\Language
     */
    public function getLanguage(): Language
    {
        return $this->language;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\Language $language
     * @return LinguisticSection
     */
    public function withLanguage(Language $language): LinguisticSection
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
