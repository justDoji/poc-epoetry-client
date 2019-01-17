<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocuments implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\AuxiliaryDocument
     */
    private $auxiliaryDocument;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\AuxiliaryDocument $auxiliaryDocument
     */
    public function __construct(AuxiliaryDocument $auxiliaryDocument)
    {
        $this->auxiliaryDocument = $auxiliaryDocument;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\AuxiliaryDocument
     */
    public function getAuxiliaryDocument(): AuxiliaryDocument
    {
        return $this->auxiliaryDocument;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\AuxiliaryDocument $auxiliaryDocument
     * @return AuxiliaryDocuments
     */
    public function withAuxiliaryDocument(AuxiliaryDocument $auxiliaryDocument): AuxiliaryDocuments
    {
        $new = clone $this;
        $new->auxiliaryDocument = $auxiliaryDocument;

        return $new;
    }
}
