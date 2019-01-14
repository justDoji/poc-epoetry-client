<?php

namespace OpenEuropa\ePoetry\Type;

abstract class dgtDocument
{

    /**
     * @var documentFormat $format
     */
    protected $format = null;

    /**
     * @var documentType $type
     */
    protected $type = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param documentFormat $format
     * @param documentType $type
     * @param string $name
     */
    public function __construct($format, $type, $name)
    {
      $this->format = $format;
      $this->type = $type;
      $this->name = $name;
    }

    /**
     * @return documentFormat
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param documentFormat $format
     * @return \OpenEuropa\ePoetry\Type\dgtDocument
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return documentType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param documentType $type
     * @return \OpenEuropa\ePoetry\Type\dgtDocument
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \OpenEuropa\ePoetry\Type\dgtDocument
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
