<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocument extends DgtDocument implements AuxiliaryDocumentInterface, RequestInterface, ResultInterface
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
     * @return AuxiliaryDocumentInterface
     */
    public function withLanguage(string $language): AuxiliaryDocumentInterface
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
