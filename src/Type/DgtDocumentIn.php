<?php


namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;


abstract class DgtDocumentIn
{

    /**
     * @var base64Binary $file
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
     * @param base64Binary $file
     * @param documentFormat $format
     * @param documentTypeIn $type
     * @param string $name
     */
    public function __construct($file, $format, $type, $name)
    {
        $this->file = $file;
        $this->format = $format;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * @return base64Binary
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param base64Binary $file
     * @return dgtDocumentIn
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
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
     * @return dgtDocumentIn
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return documentTypeIn
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param documentTypeIn $type
     * @return dgtDocumentIn
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
     * @return dgtDocumentIn
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}
