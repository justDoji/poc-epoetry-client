<?php

namespace OpenEuropa\EPoetry\Type;

use OpenEuropa\EPoetry\Type\DgtDocumentIn;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class OriginalDocumentIn extends DgtDocumentIn implements RequestInterface, ResultInterface
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
     * @param base64Binary $file
     * @param string $format
     * @param documentTypeIn $type
     * @param string $name
     * @param bool $trackChanges
     */
    public function __construct($file, $format, $type, $name, $trackChanges)
    {

        parent::__construct($file, $format, $type, $name);

        $this->trackChanges = $trackChanges;
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
     * @return originalDocumentIn
     */
    public function setLinguisticSections($linguisticSections)
    {
        $this->linguisticSections = $linguisticSections;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTrackChanges()
    {
        return $this->trackChanges;
    }

    /**
     * @param bool $trackChanges
     * @return originalDocumentIn
     */
    public function setTrackChanges($trackChanges)
    {
        $this->trackChanges = $trackChanges;

        return $this;
    }
}
