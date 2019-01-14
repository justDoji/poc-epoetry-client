<?php

namespace OpenEuropa\ePoetry\Type;

class linguisticSectionIn
{

    /**
     * @var languageIn $language
     */
    protected $language = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return languageIn
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param languageIn $language
     * @return \OpenEuropa\ePoetry\Type\linguisticSectionIn
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
