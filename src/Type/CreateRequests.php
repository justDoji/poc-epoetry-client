<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CreateRequests implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\linguisticRequestIn
     */
    private $linguisticRequest;

    /**
     * @var \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    private $relatedRequest;

    /**
     * @var string
     */
    private $templateName;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\linguisticRequestIn $linguisticRequest
     * @var \OpenEuropa\ePoetry\Type\requestReferenceIn $relatedRequest
     * @var string $templateName
     */
    public function __construct($linguisticRequest, $relatedRequest, $templateName)
    {
        $this->linguisticRequest = $linguisticRequest;
        $this->relatedRequest = $relatedRequest;
        $this->templateName = $templateName;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\linguisticRequestIn
     */
    public function getLinguisticRequest()
    {
        return $this->linguisticRequest;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\linguisticRequestIn $linguisticRequest
     * @return CreateRequests
     */
    public function withLinguisticRequest($linguisticRequest)
    {
        $new = clone $this;
        $new->linguisticRequest = $linguisticRequest;

        return $new;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    public function getRelatedRequest()
    {
        return $this->relatedRequest;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\requestReferenceIn $relatedRequest
     * @return CreateRequests
     */
    public function withRelatedRequest($relatedRequest)
    {
        $new = clone $this;
        $new->relatedRequest = $relatedRequest;

        return $new;
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
     * @return CreateRequests
     */
    public function withTemplateName($templateName)
    {
        $new = clone $this;
        $new->templateName = $templateName;

        return $new;
    }


}

