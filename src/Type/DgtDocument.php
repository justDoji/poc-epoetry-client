<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class DgtDocument implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\documentFormat
     */
    private $format;

    /**
     * @var \OpenEuropa\ePoetry\Type\documentType
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\documentFormat $format
     * @var \OpenEuropa\ePoetry\Type\documentType $type
     * @var string $name
     */
    public function __construct($format, $type, $name)
    {
        $this->format = $format;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\documentFormat
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\documentFormat $format
     * @return DgtDocument
     */
    public function withFormat($format)
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\documentType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\documentType $type
     * @return DgtDocument
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
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
     * @return DgtDocument
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }


}

