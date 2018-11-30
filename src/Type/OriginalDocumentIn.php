<?php

namespace OpenEuropa\ePoetry\Type;

use OpenEuropa\ePoetry\Type\DgtDocumentIn;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class OriginalDocumentIn extends dgtDocumentIn
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
     * @param boolean $trackChanges
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
     * @return boolean
     */
    public function getTrackChanges()
    {
        return $this->trackChanges;
    }

    /**
     * @param boolean $trackChanges
     * @return originalDocumentIn
     */
    public function setTrackChanges($trackChanges)
    {
        $this->trackChanges = $trackChanges;

        return $this;
    }

}
