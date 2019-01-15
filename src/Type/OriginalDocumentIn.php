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
     * @param string $file
     *   The Base64 encoded file.
     * @param string $format
     * @param documentTypeIn $type
     * @param string $name
     * @param bool $trackChanges
     */
    public function __construct(string $file, string $format, documentTypeIn $type, string $name, bool $trackChanges)
    {

        parent::__construct($file, $format, $type, $name);

        $this->trackChanges = $trackChanges;
    }

    /**
     * @return linguisticSections
     */
    public function getLinguisticSections(): linguisticSections
    {
        return $this->linguisticSections;
    }

    /**
     * @param linguisticSections $linguisticSections
     * @return originalDocumentIn
     */
    public function setLinguisticSections(linguisticSections $linguisticSections): OriginalDocumentIn
    {
        $this->linguisticSections = $linguisticSections;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTrackChanges(): bool
    {
        return $this->trackChanges;
    }

    /**
     * @param bool $trackChanges
     * @return originalDocumentIn
     */
    public function setTrackChanges(bool $trackChanges): OriginalDocumentIn
    {
        $this->trackChanges = $trackChanges;

        return $this;
    }
}
