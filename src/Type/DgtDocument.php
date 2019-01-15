<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class DgtDocument implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\documentFormat
     */
    private $format;

    /**
     * @var \OpenEuropa\EPoetry\Type\documentType
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\documentFormat $format
     * @var \OpenEuropa\EPoetry\Type\documentType $type
     * @var string $name
     */
    public function __construct(documentFormat $format, documentType $type, string $name)
    {
        $this->format = $format;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\documentFormat
     */
    public function getFormat(): documentFormat
    {
        return $this->format;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\documentFormat $format
     * @return DgtDocument
     */
    public function withFormat(documentFormat $format): DgtDocument
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\documentType
     */
    public function getType(): documentType
    {
        return $this->type;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\documentType $type
     * @return DgtDocument
     */
    public function withType(documentType $type): DgtDocument
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DgtDocument
     */
    public function withName(string $name): DgtDocument
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
