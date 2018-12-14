<?php

namespace OpenEuropa\ePoetry\Type;

class linguisticSection
{

    /**
     * @var language $language
     */
    protected $language = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return language
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param language $language
     * @return \OpenEuropa\ePoetry\Type\linguisticSection
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
