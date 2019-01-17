<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocument implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $language;

    /**
     * Constructor
     *
     * @param string $language
     */
    public function __construct(string $language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return AuxiliaryDocument
     */
    public function withLanguage(string $language): AuxiliaryDocument
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
