<?php

namespace OpenEuropa\EPoetry\Type;

class linguisticRequestIn
{

    /**
     * @var requestGeneralInfoIn $generalInfo
     */
    protected $generalInfo = null;

    /**
     * @var contacts $contacts
     */
    protected $contacts = null;

    /**
     * @var originalDocumentIn $originalDocument
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

    
    public function __construct()
    {
    
    }

    /**
     * @return requestGeneralInfoIn
     */
    public function getGeneralInfo()
    {
      return $this->generalInfo;
    }

    /**
     * @param requestGeneralInfoIn $generalInfo
     * @return \OpenEuropa\EPoetry\Type\linguisticRequestIn
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
     * @return \OpenEuropa\EPoetry\Type\linguisticRequestIn
     */
    public function setContacts($contacts)
    {
      $this->contacts = $contacts;
      return $this;
    }

    /**
     * @return originalDocumentIn
     */
    public function getOriginalDocument()
    {
      return $this->originalDocument;
    }

    /**
     * @param originalDocumentIn $originalDocument
     * @return \OpenEuropa\EPoetry\Type\linguisticRequestIn
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
     * @return \OpenEuropa\EPoetry\Type\linguisticRequestIn
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
     * @return \OpenEuropa\EPoetry\Type\linguisticRequestIn
     */
    public function setAuxiliaryDocuments($auxiliaryDocuments)
    {
      $this->auxiliaryDocuments = $auxiliaryDocuments;
      return $this;
    }

}
