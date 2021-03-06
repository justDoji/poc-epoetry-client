<?php

namespace OpenEuropa\EPoetry\Type;

class auxiliaryDocuments
{

    /**
     * @var auxiliaryDocument $auxiliaryDocument
     */
    protected $auxiliaryDocument = null;

    /**
     * @param auxiliaryDocument $auxiliaryDocument
     */
    public function __construct($auxiliaryDocument)
    {
      $this->auxiliaryDocument = $auxiliaryDocument;
    }

    /**
     * @return auxiliaryDocument
     */
    public function getAuxiliaryDocument()
    {
      return $this->auxiliaryDocument;
    }

    /**
     * @param auxiliaryDocument $auxiliaryDocument
     * @return \OpenEuropa\EPoetry\Type\auxiliaryDocuments
     */
    public function setAuxiliaryDocument($auxiliaryDocument)
    {
      $this->auxiliaryDocument = $auxiliaryDocument;
      return $this;
    }

}
