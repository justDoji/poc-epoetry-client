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
     * @var documentFormat $format
     */
    protected $format = null;

    /**
     * @var documentTypeIn $type
     */
    protected $type = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $file
     * @param documentFormat $format
     * @param documentTypeIn $type
     * @param string $name
     */
    public function __construct(string $file, documentFormat $format, documentTypeIn $type, string $name)
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
     * @return documentFormat
     */
    public function getFormat(): documentFormat
    {
        return $this->format;
    }

    /**
     * @param documentFormat $format
     * @return dgtDocumentIn
     */
    public function setFormat(documentFormat $format): DgtDocumentIn
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return documentTypeIn
     */
    public function getType(): documentTypeIn
    {
        return $this->type;
    }

    /**
     * @param documentTypeIn $type
     * @return dgtDocumentIn
     */
    public function setType(documentTypeIn $type): DgtDocumentIn
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
