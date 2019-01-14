<?php

namespace OpenEuropa\ePoetry\Type;

class requestReferenceIn
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $internalTechnicalId
     */
    protected $internalTechnicalId = null;

    /**
     * @param int $id
     * @param string $internalTechnicalId
     */
    public function __construct($id, $internalTechnicalId)
    {
      $this->id = $id;
      $this->internalTechnicalId = $internalTechnicalId;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalTechnicalId()
    {
      return $this->internalTechnicalId;
    }

    /**
     * @param string $internalTechnicalId
     * @return \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    public function setInternalTechnicalId($internalTechnicalId)
    {
      $this->internalTechnicalId = $internalTechnicalId;
      return $this;
    }

}
