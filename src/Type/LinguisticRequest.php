<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\RequestReference
     */
    private $reference;

    /**
     * @var \OpenEuropa\EPoetry\Type\RequestGeneralInfo
     */
    private $generalInfo;

    /**
     * @var \OpenEuropa\EPoetry\Type\Contacts
     */
    private $contacts;

    /**
     * @var \OpenEuropa\EPoetry\Type\OriginalDocument
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
     * @var string
     */
    private $statusCode;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\RequestReference $reference
     * @var \OpenEuropa\EPoetry\Type\RequestGeneralInfo $generalInfo
     * @var \OpenEuropa\EPoetry\Type\Contacts $contacts
     * @var \OpenEuropa\EPoetry\Type\OriginalDocument $originalDocument
     * @var \OpenEuropa\EPoetry\Type\ProductRequests $productRequests
     * @var \OpenEuropa\EPoetry\Type\AuxiliaryDocuments $auxiliaryDocuments
     * @var string $statusCode
     */
    public function __construct(RequestReference $reference, RequestGeneralInfo $generalInfo, Contacts $contacts, OriginalDocument $originalDocument, ProductRequests $productRequests, AuxiliaryDocuments $auxiliaryDocuments, string $statusCode)
    {
        $this->reference = $reference;
        $this->generalInfo = $generalInfo;
        $this->contacts = $contacts;
        $this->originalDocument = $originalDocument;
        $this->productRequests = $productRequests;
        $this->auxiliaryDocuments = $auxiliaryDocuments;
        $this->statusCode = $statusCode;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\RequestReference
     */
    public function getReference(): RequestReference
    {
        return $this->reference;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\RequestReference $reference
     * @return LinguisticRequest
     */
    public function withReference(RequestReference $reference): LinguisticRequest
    {
        $new = clone $this;
        $new->reference = $reference;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\RequestGeneralInfo
     */
    public function getGeneralInfo(): RequestGeneralInfo
    {
        return $this->generalInfo;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\RequestGeneralInfo $generalInfo
     * @return LinguisticRequest
     */
    public function withGeneralInfo(RequestGeneralInfo $generalInfo): LinguisticRequest
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
     * @return LinguisticRequest
     */
    public function withContacts(Contacts $contacts): LinguisticRequest
    {
        $new = clone $this;
        $new->contacts = $contacts;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\OriginalDocument
     */
    public function getOriginalDocument(): OriginalDocument
    {
        return $this->originalDocument;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\OriginalDocument $originalDocument
     * @return LinguisticRequest
     */
    public function withOriginalDocument(OriginalDocument $originalDocument): LinguisticRequest
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
     * @return LinguisticRequest
     */
    public function withProductRequests(ProductRequests $productRequests): LinguisticRequest
    {
        $new = clone $this;
        $new->productRequests = $productRequests;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\AuxiliaryDocuments
     */
    public function getAuxiliaryDocuments(): AuxiliaryDocuments
    {
        return $this->auxiliaryDocuments;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\AuxiliaryDocuments $auxiliaryDocuments
     * @return LinguisticRequest
     */
    public function withAuxiliaryDocuments(AuxiliaryDocuments $auxiliaryDocuments): LinguisticRequest
    {
        $new = clone $this;
        $new->auxiliaryDocuments = $auxiliaryDocuments;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusCode(): string
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return LinguisticRequest
     */
    public function withStatusCode(string $statusCode): LinguisticRequest
    {
        $new = clone $this;
        $new->statusCode = $statusCode;

        return $new;
    }
}
