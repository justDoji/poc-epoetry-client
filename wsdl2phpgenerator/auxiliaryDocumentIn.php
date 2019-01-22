<?php

namespace OpenEuropa\EPoetry\Type;

class auxiliaryDocumentIn extends dgtDocumentIn
{

    /**
     * @var languageCode $language
     */
    protected $language = null;

    /**
     * @param base64Binary $file
     * @param documentFormat $format
     * @param documentTypeIn $type
     * @param string $name
     * @param languageCode $language
     */
    public function __construct($file, $format, $type, $name, $language)
    {
      parent::__construct($file, $format, $type, $name);
      $this->language = $language;
    }

    /**
     * @return languageCode
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param languageCode $language
     * @return \OpenEuropa\EPoetry\Type\auxiliaryDocumentIn
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
