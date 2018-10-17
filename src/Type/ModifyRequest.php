<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ModifyRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    private $requestReference;

    /**
     * @var \OpenEuropa\ePoetry\Type\linguisticRequestIn
     */
    private $linguisticRequest;

    /**
     * @var string
     */
    private $templateName;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\requestReferenceIn $requestReference
     * @var \OpenEuropa\ePoetry\Type\linguisticRequestIn $linguisticRequest
     * @var string $templateName
     */
    public function __construct($requestReference, $linguisticRequest, $templateName)
    {
        $this->requestReference = $requestReference;
        $this->linguisticRequest = $linguisticRequest;
        $this->templateName = $templateName;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\requestReferenceIn
     */
    public function getRequestReference()
    {
        return $this->requestReference;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\requestReferenceIn $requestReference
     * @return ModifyRequest
     */
    public function withRequestReference($requestReference)
    {
        $new = clone $this;
        $new->requestReference = $requestReference;

        return $new;
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
     * @return ModifyRequest
     */
    public function withLinguisticRequest($linguisticRequest)
    {
        $new = clone $this;
        $new->linguisticRequest = $linguisticRequest;

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
     * @return ModifyRequest
     */
    public function withTemplateName($templateName)
    {
        $new = clone $this;
        $new->templateName = $templateName;

        return $new;
    }


}

