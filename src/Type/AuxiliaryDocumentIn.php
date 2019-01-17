<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocumentIn extends dgtDocumentIn implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $language;

    /**
     * @param string $file
     *   The Base64 encoded file.
     * @param \OpenEuropa\EPoetry\Type\documentFormat $format
     * @param \OpenEuropa\EPoetry\Type\documentTypeIn $type
     * @param string $name
     * @param string $language
     */
    public function __construct(string $file, documentFormat $format, documentTypeIn $type, string $name, string $language)
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
     * @return AuxiliaryDocumentIn
     */
    public function withLanguage(string $language): AuxiliaryDocumentIn
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }
}
