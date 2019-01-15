<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocumentIn extends dgtDocumentIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\languageCode
     */
    private $language;

    /**
     * @param base64Binary $file
     * @param \OpenEuropa\ePoetry\Type\documentFormat $format
     * @param \OpenEuropa\ePoetry\Type\documentTypeIn $type
     * @param string $name
     * @param \OpenEuropa\ePoetry\Type\languageCode $language
     */
    public function __construct($file, $format, $type, $name, $language)
    {
        parent::__construct($file, $format, $type, $name);
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
     * @return AuxiliaryDocumentIn
     */
    public function withLanguage($language)
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }


}

