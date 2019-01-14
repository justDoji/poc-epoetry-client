<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class createRequests implements RequestInterface, ResultInterface
{

    /**
     * @var linguisticRequestIn[] $linguisticRequest
     */
    protected $linguisticRequest = null;

    /**
     * @var requestReferenceIn $relatedRequest
     */
    protected $relatedRequest = null;

    /**
     * @var string $templateName
     */
    protected $templateName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return linguisticRequestIn[]
     */
    public function getLinguisticRequest()
    {
      return $this->linguisticRequest;
    }

    /**
     * @param linguisticRequestIn[] $linguisticRequest
     * @return \OpenEuropa\ePoetry\Type\createRequests
     */
    public function setLinguisticRequest(array $linguisticRequest = null)
    {
      $this->linguisticRequest = $linguisticRequest;
      return $this;
    }

    /**
     * @return requestReferenceIn
     */
    public function getRelatedRequest()
    {
      return $this->relatedRequest;
    }

    /**
     * @param requestReferenceIn $relatedRequest
     * @return \OpenEuropa\ePoetry\Type\createRequests
     */
    public function setRelatedRequest($relatedRequest)
    {
      $this->relatedRequest = $relatedRequest;
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
     * @return \OpenEuropa\ePoetry\Type\createRequests
     */
    public function setTemplateName($templateName)
    {
      $this->templateName = $templateName;
      return $this;
    }

}
