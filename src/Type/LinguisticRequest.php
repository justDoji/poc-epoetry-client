<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LinguisticRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\requestReference
     */
    private $reference;

    /**
     * @var \OpenEuropa\EPoetry\Type\requestGeneralInfo
     */
    private $generalInfo;

    /**
     * @var \OpenEuropa\EPoetry\Type\contacts
     */
    private $contacts;

    /**
     * @var \OpenEuropa\EPoetry\Type\originalDocument
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
     * @var string
     */
    private $statusCode;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\requestReference $reference
     * @var \OpenEuropa\EPoetry\Type\requestGeneralInfo $generalInfo
     * @var \OpenEuropa\EPoetry\Type\contacts $contacts
     * @var \OpenEuropa\EPoetry\Type\originalDocument $originalDocument
     * @var \OpenEuropa\EPoetry\Type\productRequests $productRequests
     * @var \OpenEuropa\EPoetry\Type\auxiliaryDocuments $auxiliaryDocuments
     * @var string $statusCode
     */
    public function __construct(requestReference $reference, requestGeneralInfo $generalInfo, contacts $contacts, originalDocument $originalDocument, productRequests $productRequests, auxiliaryDocuments $auxiliaryDocuments, string $statusCode)
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
     * @return \OpenEuropa\EPoetry\Type\requestReference
     */
    public function getReference(): requestReference
    {
        return $this->reference;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\requestReference $reference
     * @return LinguisticRequest
     */
    public function withReference(requestReference $reference): LinguisticRequest
    {
        $new = clone $this;
        $new->reference = $reference;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\requestGeneralInfo
     */
    public function getGeneralInfo(): requestGeneralInfo
    {
        return $this->generalInfo;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\requestGeneralInfo $generalInfo
     * @return LinguisticRequest
     */
    public function withGeneralInfo(requestGeneralInfo $generalInfo): LinguisticRequest
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
     * @return LinguisticRequest
     */
    public function withContacts(contacts $contacts): LinguisticRequest
    {
        $new = clone $this;
        $new->contacts = $contacts;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\originalDocument
     */
    public function getOriginalDocument(): originalDocument
    {
        return $this->originalDocument;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\originalDocument $originalDocument
     * @return LinguisticRequest
     */
    public function withOriginalDocument(originalDocument $originalDocument): LinguisticRequest
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
     * @return LinguisticRequest
     */
    public function withProductRequests(productRequests $productRequests): LinguisticRequest
    {
        $new = clone $this;
        $new->productRequests = $productRequests;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\auxiliaryDocuments
     */
    public function getAuxiliaryDocuments(): auxiliaryDocuments
    {
        return $this->auxiliaryDocuments;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\auxiliaryDocuments $auxiliaryDocuments
     * @return LinguisticRequest
     */
    public function withAuxiliaryDocuments(auxiliaryDocuments $auxiliaryDocuments): LinguisticRequest
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
