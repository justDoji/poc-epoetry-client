<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticRequestIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\RequestGeneralInfoIn
     */
    private $generalInfo;

    /**
     * @var \OpenEuropa\EPoetry\Type\Contacts
     */
    private $contacts;

    /**
     * @var \OpenEuropa\EPoetry\Type\OriginalDocumentIn
     */
    private $originalDocument;

    /**
     * @var \OpenEuropa\EPoetry\Type\ProductRequests
     */
    private $productRequests;

    /**
     * @var \OpenEuropa\EPoetry\Type\AuxiliaryDocuments
     */
    private $auxiliaryDocuments;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\RequestGeneralInfoIn $generalInfo
     * @var \OpenEuropa\EPoetry\Type\Contacts $contacts
     * @var \OpenEuropa\EPoetry\Type\OriginalDocumentIn $originalDocument
     * @var \OpenEuropa\EPoetry\Type\ProductRequests $productRequests
     * @var \OpenEuropa\EPoetry\Type\AuxiliaryDocuments $auxiliaryDocuments
     */
    public function __construct(RequestGeneralInfoIn $generalInfo, Contacts $contacts, OriginalDocumentIn $originalDocument, ProductRequests $productRequests, AuxiliaryDocuments $auxiliaryDocuments)
    {
        $this->generalInfo = $generalInfo;
        $this->contacts = $contacts;
        $this->originalDocument = $originalDocument;
        $this->productRequests = $productRequests;
        $this->auxiliaryDocuments = $auxiliaryDocuments;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\RequestGeneralInfoIn
     */
    public function getGeneralInfo(): RequestGeneralInfoIn
    {
        return $this->generalInfo;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\RequestGeneralInfoIn $generalInfo
     * @return LinguisticRequestIn
     */
    public function withGeneralInfo(RequestGeneralInfoIn $generalInfo): LinguisticRequestIn
    {
        $new = clone $this;
        $new->generalInfo = $generalInfo;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\Contacts
     */
    public function getContacts(): Contacts
    {
        return $this->contacts;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\Contacts $contacts
     * @return LinguisticRequestIn
     */
    public function withContacts(Contacts $contacts): LinguisticRequestIn
    {
        $new = clone $this;
        $new->contacts = $contacts;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\OriginalDocumentIn
     */
    public function getOriginalDocument(): OriginalDocumentIn
    {
        return $this->originalDocument;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\OriginalDocumentIn $originalDocument
     * @return LinguisticRequestIn
     */
    public function withOriginalDocument(OriginalDocumentIn $originalDocument): LinguisticRequestIn
    {
        $new = clone $this;
        $new->originalDocument = $originalDocument;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\ProductRequests
     */
    public function getProductRequests(): ProductRequests
    {
        return $this->productRequests;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\ProductRequests $productRequests
     * @return LinguisticRequestIn
     */
    public function withProductRequests(ProductRequests $productRequests): LinguisticRequestIn
    {
        $new = clone $this;
        $new->productRequests = $productRequests;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\AuxiliaryDocuments
     */
    public function getAuxiliaryDocuments()
    {
        return $this->auxiliaryDocuments;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\AuxiliaryDocuments $auxiliaryDocuments
     * @return LinguisticRequestIn
     */
    public function withAuxiliaryDocuments($auxiliaryDocuments): LinguisticRequestIn
    {
        $new = clone $this;
        $new->auxiliaryDocuments = $auxiliaryDocuments;

        return $new;
    }
}
