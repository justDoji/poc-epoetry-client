<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticRequestIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\requestGeneralInfoIn
     */
    private $generalInfo;

    /**
     * @var \OpenEuropa\ePoetry\Type\contacts
     */
    private $contacts;

    /**
     * @var \OpenEuropa\ePoetry\Type\originalDocumentIn
     */
    private $originalDocument;

    /**
     * @var \OpenEuropa\ePoetry\Type\productRequests
     */
    private $productRequests;

    /**
     * @var \OpenEuropa\ePoetry\Type\auxiliaryDocuments
     */
    private $auxiliaryDocuments;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\requestGeneralInfoIn $generalInfo
     * @var \OpenEuropa\ePoetry\Type\contacts $contacts
     * @var \OpenEuropa\ePoetry\Type\originalDocumentIn $originalDocument
     * @var \OpenEuropa\ePoetry\Type\productRequests $productRequests
     * @var \OpenEuropa\ePoetry\Type\auxiliaryDocuments $auxiliaryDocuments
     */
    public function __construct($generalInfo, $contacts, $originalDocument, $productRequests, $auxiliaryDocuments)
    {
        $this->generalInfo = $generalInfo;
        $this->contacts = $contacts;
        $this->originalDocument = $originalDocument;
        $this->productRequests = $productRequests;
        $this->auxiliaryDocuments = $auxiliaryDocuments;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\requestGeneralInfoIn
     */
    public function getGeneralInfo()
    {
        return $this->generalInfo;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\requestGeneralInfoIn $generalInfo
     * @return LinguisticRequestIn
     */
    public function withGeneralInfo($generalInfo)
    {
        $new = clone $this;
        $new->generalInfo = $generalInfo;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\contacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\contacts $contacts
     * @return LinguisticRequestIn
     */
    public function withContacts($contacts)
    {
        $new = clone $this;
        $new->contacts = $contacts;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\originalDocumentIn
     */
    public function getOriginalDocument()
    {
        return $this->originalDocument;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\originalDocumentIn $originalDocument
     * @return LinguisticRequestIn
     */
    public function withOriginalDocument($originalDocument)
    {
        $new = clone $this;
        $new->originalDocument = $originalDocument;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\productRequests
     */
    public function getProductRequests()
    {
        return $this->productRequests;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\productRequests $productRequests
     * @return LinguisticRequestIn
     */
    public function withProductRequests($productRequests)
    {
        $new = clone $this;
        $new->productRequests = $productRequests;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\auxiliaryDocuments
     */
    public function getAuxiliaryDocuments()
    {
        return $this->auxiliaryDocuments;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\auxiliaryDocuments $auxiliaryDocuments
     * @return LinguisticRequestIn
     */
    public function withAuxiliaryDocuments($auxiliaryDocuments)
    {
        $new = clone $this;
        $new->auxiliaryDocuments = $auxiliaryDocuments;

        return $new;
    }


}

