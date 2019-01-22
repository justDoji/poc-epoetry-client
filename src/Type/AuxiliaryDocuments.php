<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocuments implements RequestInterface, ResultInterface
{

    /**
     * @var array \OpenEuropa\EPoetry\Type\AuxiliaryDocumentInterface
     */
    private $auxiliaryDocument = [];

    /**
     * @return \OpenEuropa\EPoetry\Type\AuxiliaryDocumentInterface
     */
    public function getAuxiliaryDocument(): AuxiliaryDocumentInterface
    {
        return $this->auxiliaryDocument;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\AuxiliaryDocumentInterface $auxiliaryDocument
     * @return AuxiliaryDocuments
     */
    public function withAuxiliaryDocument(AuxiliaryDocumentInterface $auxiliaryDocument): AuxiliaryDocuments
    {
        $new = clone $this;
        $new->auxiliaryDocument[] = $auxiliaryDocument;

        return $new;
    }
}
