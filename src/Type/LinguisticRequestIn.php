<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticRequestIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\requestGeneralInfoIn
     */
    private $generalInfo;

    /**
     * @var \OpenEuropa\EPoetry\Type\contacts
     */
    private $contacts;

    /**
     * @var \OpenEuropa\EPoetry\Type\originalDocumentIn
     */
    private $originalDocument;

    /**
     * @var \OpenEuropa\EPoetry\Type\productRequests
     */
    private $productRequests;

    /**
     * @var \OpenEuropa\EPoetry\Type\auxiliaryDocuments
     */
    private $auxiliaryDocuments;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\requestGeneralInfoIn $generalInfo
     * @var \OpenEuropa\EPoetry\Type\contacts $contacts
     * @var \OpenEuropa\EPoetry\Type\originalDocumentIn $originalDocument
     * @var \OpenEuropa\EPoetry\Type\productRequests $productRequests
     * @var \OpenEuropa\EPoetry\Type\auxiliaryDocuments $auxiliaryDocuments
     */
    public function __construct(requestGeneralInfoIn $generalInfo, contacts $contacts, originalDocumentIn $originalDocument, productRequests $productRequests, auxiliaryDocuments $auxiliaryDocuments)
    {
        $this->generalInfo = $generalInfo;
        $this->contacts = $contacts;
        $this->originalDocument = $originalDocument;
        $this->productRequests = $productRequests;
        $this->auxiliaryDocuments = $auxiliaryDocuments;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\requestGeneralInfoIn
     */
    public function getGeneralInfo(): requestGeneralInfoIn
    {
        return $this->generalInfo;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\requestGeneralInfoIn $generalInfo
     * @return LinguisticRequestIn
     */
    public function withGeneralInfo(requestGeneralInfoIn $generalInfo): LinguisticRequestIn
    {
        $new = clone $this;
        $new->generalInfo = $generalInfo;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\contacts
     */
    public function getContacts(): contacts
    {
        return $this->contacts;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\contacts $contacts
     * @return LinguisticRequestIn
     */
    public function withContacts(contacts $contacts): LinguisticRequestIn
    {
        $new = clone $this;
        $new->contacts = $contacts;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\originalDocumentIn
     */
    public function getOriginalDocument(): originalDocumentIn
    {
        return $this->originalDocument;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\originalDocumentIn $originalDocument
     * @return LinguisticRequestIn
     */
    public function withOriginalDocument(originalDocumentIn $originalDocument): LinguisticRequestIn
    {
        $new = clone $this;
        $new->originalDocument = $originalDocument;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\productRequests
     */
    public function getProductRequests(): productRequests
    {
        return $this->productRequests;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\productRequests $productRequests
     * @return LinguisticRequestIn
     */
    public function withProductRequests(productRequests $productRequests): LinguisticRequestIn
    {
        $new = clone $this;
        $new->productRequests = $productRequests;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\auxiliaryDocuments
     */
    public function getAuxiliaryDocuments()
    {
        return $this->auxiliaryDocuments;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\auxiliaryDocuments $auxiliaryDocuments
     * @return LinguisticRequestIn
     */
    public function withAuxiliaryDocuments($auxiliaryDocuments): LinguisticRequestIn
    {
        $new = clone $this;
        $new->auxiliaryDocuments = $auxiliaryDocuments;

        return $new;
    }
}
