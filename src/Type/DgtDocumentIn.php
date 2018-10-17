<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class DgtDocumentIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\base64Binary
     */
    private $file;

    /**
     * @var \OpenEuropa\ePoetry\Type\documentFormat
     */
    private $format;

    /**
     * @var \OpenEuropa\ePoetry\Type\documentTypeIn
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\base64Binary $file
     * @var \OpenEuropa\ePoetry\Type\documentFormat $format
     * @var \OpenEuropa\ePoetry\Type\documentTypeIn $type
     * @var string $name
     */
    public function __construct($file, $format, $type, $name)
    {
        $this->file = $file;
        $this->format = $format;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\base64Binary
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\base64Binary $file
     * @return DgtDocumentIn
     */
    public function withFile($file)
    {
        $new = clone $this;
        $new->file = $file;

        return $new;
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
     * @return DgtDocumentIn
     */
    public function withFormat($format)
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\documentTypeIn
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\documentTypeIn $type
     * @return DgtDocumentIn
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
     * @return DgtDocumentIn
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }


}

