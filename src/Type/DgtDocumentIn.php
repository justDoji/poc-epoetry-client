<?php


namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

abstract class DgtDocumentIn
{

    /**
     * @var string $file
     *   The Base64 encoded file.
     */
    protected $file = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $file
     * @param string $format
     *   A DocumentFormat code.
     * @param string $type
     *   A DocumentTypeIn code.
     * @param string $name
     */
    public function __construct(string $file, string $format, string $type, string $name)
    {
        $this->file = $file;
        $this->format = $format;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return dgtDocumentIn
     */
    public function setFile(string $file): DgtDocumentIn
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * @param string $format
     * @return dgtDocumentIn
     */
    public function setFormat(string $format): DgtDocumentIn
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return dgtDocumentIn
     */
    public function setType(string $type): DgtDocumentIn
    {
        $this->type = $type;

        return $this;
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
     * @return dgtDocumentIn
     */
    public function setName(string $name): DgtDocumentIn
    {
        $this->name = $name;

        return $this;
    }
}
