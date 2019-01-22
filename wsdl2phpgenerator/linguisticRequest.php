<?php

namespace OpenEuropa\EPoetry\Type;

class linguisticRequest
{

    /**
     * @var requestReference $reference
     */
    protected $reference = null;

    /**
     * @var requestGeneralInfo $generalInfo
     */
    protected $generalInfo = null;

    /**
     * @var contacts $contacts
     */
    protected $contacts = null;

    /**
     * @var originalDocument $originalDocument
     */
    protected $originalDocument = null;

    /**
     * @var productRequests $productRequests
     */
    protected $productRequests = null;

    /**
     * @var auxiliaryDocuments $auxiliaryDocuments
     */
    protected $auxiliaryDocuments = null;

    /**
     * @var string $statusCode
     */
    protected $statusCode = null;

    /**
     * @param string $statusCode
     */
    public function __construct($statusCode)
    {
      $this->statusCode = $statusCode;
    }

    /**
     * @return requestReference
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param requestReference $reference
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return requestGeneralInfo
     */
    public function getGeneralInfo()
    {
      return $this->generalInfo;
    }

    /**
     * @param requestGeneralInfo $generalInfo
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function setGeneralInfo($generalInfo)
    {
      $this->generalInfo = $generalInfo;
      return $this;
    }

    /**
     * @return contacts
     */
    public function getContacts()
    {
      return $this->contacts;
    }

    /**
     * @param contacts $contacts
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function setContacts($contacts)
    {
      $this->contacts = $contacts;
      return $this;
    }

    /**
     * @return originalDocument
     */
    public function getOriginalDocument()
    {
      return $this->originalDocument;
    }

    /**
     * @param originalDocument $originalDocument
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function setOriginalDocument($originalDocument)
    {
      $this->originalDocument = $originalDocument;
      return $this;
    }

    /**
     * @return productRequests
     */
    public function getProductRequests()
    {
      return $this->productRequests;
    }

    /**
     * @param productRequests $productRequests
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function setProductRequests($productRequests)
    {
      $this->productRequests = $productRequests;
      return $this;
    }

    /**
     * @return auxiliaryDocuments
     */
    public function getAuxiliaryDocuments()
    {
      return $this->auxiliaryDocuments;
    }

    /**
     * @param auxiliaryDocuments $auxiliaryDocuments
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function setAuxiliaryDocuments($auxiliaryDocuments)
    {
      $this->auxiliaryDocuments = $auxiliaryDocuments;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
      return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
