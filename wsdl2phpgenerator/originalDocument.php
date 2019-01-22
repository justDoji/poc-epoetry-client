<?php

namespace OpenEuropa\EPoetry\Type;

class originalDocument extends dgtDocument
{

    /**
     * @var linguisticSections $linguisticSections
     */
    protected $linguisticSections = null;

    /**
     * @var boolean $trackChanges
     */
    protected $trackChanges = null;

    /**
     * @var float $pages
     */
    protected $pages = null;

    /**
     * @param documentFormat $format
     * @param documentType $type
     * @param string $name
     * @param boolean $trackChanges
     * @param float $pages
     */
    public function __construct($format, $type, $name, $trackChanges, $pages)
    {
      parent::__construct($format, $type, $name);
      $this->trackChanges = $trackChanges;
      $this->pages = $pages;
    }

    /**
     * @return linguisticSections
     */
    public function getLinguisticSections()
    {
      return $this->linguisticSections;
    }

    /**
     * @param linguisticSections $linguisticSections
     * @return \OpenEuropa\EPoetry\Type\originalDocument
     */
    public function setLinguisticSections($linguisticSections)
    {
      $this->linguisticSections = $linguisticSections;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTrackChanges()
    {
      return $this->trackChanges;
    }

    /**
     * @param boolean $trackChanges
     * @return \OpenEuropa\EPoetry\Type\originalDocument
     */
    public function setTrackChanges($trackChanges)
    {
      $this->trackChanges = $trackChanges;
      return $this;
    }

    /**
     * @return float
     */
    public function getPages()
    {
      return $this->pages;
    }

    /**
     * @param float $pages
     * @return \OpenEuropa\EPoetry\Type\originalDocument
     */
    public function setPages($pages)
    {
      $this->pages = $pages;
      return $this;
    }

}
