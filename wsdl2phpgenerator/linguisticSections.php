<?php

namespace OpenEuropa\EPoetry\Type;

class linguisticSections
{

    /**
     * @var linguisticSection $linguisticSection
     */
    protected $linguisticSection = null;

    /**
     * @param linguisticSection $linguisticSection
     */
    public function __construct($linguisticSection)
    {
      $this->linguisticSection = $linguisticSection;
    }

    /**
     * @return linguisticSection
     */
    public function getLinguisticSection()
    {
      return $this->linguisticSection;
    }

    /**
     * @param linguisticSection $linguisticSection
     * @return \OpenEuropa\EPoetry\Type\linguisticSections
     */
    public function setLinguisticSection($linguisticSection)
    {
      $this->linguisticSection = $linguisticSection;
      return $this;
    }

}
