<?php

namespace OpenEuropa\ePoetry\Type;

class modifyRequest
{

    /**
     * @var requestReferenceIn $requestReference
     */
    protected $requestReference = null;

    /**
     * @var linguisticRequestIn $linguisticRequest
     */
    protected $linguisticRequest = null;

    /**
     * @var string $templateName
     */
    protected $templateName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return requestReferenceIn
     */
    public function getRequestReference()
    {
      return $this->requestReference;
    }

    /**
     * @param requestReferenceIn $requestReference
     * @return \OpenEuropa\ePoetry\Type\modifyRequest
     */
    public function setRequestReference($requestReference)
    {
      $this->requestReference = $requestReference;
      return $this;
    }

    /**
     * @return linguisticRequestIn
     */
    public function getLinguisticRequest()
    {
      return $this->linguisticRequest;
    }

    /**
     * @param linguisticRequestIn $linguisticRequest
     * @return \OpenEuropa\ePoetry\Type\modifyRequest
     */
    public function setLinguisticRequest($linguisticRequest)
    {
      $this->linguisticRequest = $linguisticRequest;
      return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
      return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return \OpenEuropa\ePoetry\Type\modifyRequest
     */
    public function setTemplateName($templateName)
    {
      $this->templateName = $templateName;
      return $this;
    }

}
