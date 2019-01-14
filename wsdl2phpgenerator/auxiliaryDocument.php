<?php

namespace OpenEuropa\ePoetry\Type;

class auxiliaryDocument extends dgtDocument
{

    /**
     * @var languageCode $language
     */
    protected $language = null;

    /**
     * @param documentFormat $format
     * @param documentType $type
     * @param string $name
     * @param languageCode $language
     */
    public function __construct($format, $type, $name, $language)
    {
      parent::__construct($format, $type, $name);
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
     * @return \OpenEuropa\ePoetry\Type\auxiliaryDocument
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
