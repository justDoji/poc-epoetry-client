<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class AuxiliaryDocuments implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\auxiliaryDocument
     */
    private $auxiliaryDocument;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\auxiliaryDocument $auxiliaryDocument
     */
    public function __construct($auxiliaryDocument)
    {
        $this->auxiliaryDocument = $auxiliaryDocument;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\auxiliaryDocument
     */
    public function getAuxiliaryDocument()
    {
        return $this->auxiliaryDocument;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\auxiliaryDocument $auxiliaryDocument
     * @return AuxiliaryDocuments
     */
    public function withAuxiliaryDocument($auxiliaryDocument)
    {
        $new = clone $this;
        $new->auxiliaryDocument = $auxiliaryDocument;

        return $new;
    }


}

