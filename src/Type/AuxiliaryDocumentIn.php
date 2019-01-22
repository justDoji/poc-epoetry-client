<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocumentIn extends DgtDocumentIn implements AuxiliaryDocumentInterface, RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $language;

    /**
     * @param string $file
     *   The Base64 encoded file.
     * @param string $format
     *   A DocumentFormat code.
     * @param string $type
     *   A DocumentTypeIn code.
     * @param string $name
     * @param string $language
     */
    public function __construct(string $file, string $format, string $type, string $name, string $language)
    {
        parent::__construct($file, $format, $type, $name);
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
