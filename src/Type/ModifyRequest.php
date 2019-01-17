<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ModifyRequest implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\RequestReferenceIn
     */
    private $requestReference;

    /**
     * @var \OpenEuropa\EPoetry\Type\LinguisticRequestIn
     */
    private $linguisticRequest;

    /**
     * @var string
     */
    private $templateName;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\RequestReferenceIn $requestReference
     * @var \OpenEuropa\EPoetry\Type\LinguisticRequestIn $linguisticRequest
     * @var string $templateName
     */
    public function __construct(RequestReferenceIn $requestReference, LinguisticRequestIn $linguisticRequest, string $templateName)
    {
        $this->requestReference = $requestReference;
        $this->linguisticRequest = $linguisticRequest;
        $this->templateName = $templateName;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\RequestReferenceIn
     */
    public function getRequestReference(): RequestReferenceIn
    {
        return $this->requestReference;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\RequestReferenceIn $requestReference
     * @return ModifyRequest
     */
    public function withRequestReference(RequestReferenceIn $requestReference): ModifyRequest
    {
        $new = clone $this;
        $new->requestReference = $requestReference;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\LinguisticRequestIn
     */
    public function getLinguisticRequest(): LinguisticRequestIn
    {
        return $this->linguisticRequest;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\LinguisticRequestIn $linguisticRequest
     * @return ModifyRequest
     */
    public function withLinguisticRequest(LinguisticRequestIn $linguisticRequest): ModifyRequest
    {
        $new = clone $this;
        $new->linguisticRequest = $linguisticRequest;

        return $new;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return ModifyRequest
     */
    public function withTemplateName(string $templateName): ModifyRequest
    {
        $new = clone $this;
        $new->templateName = $templateName;

        return $new;
    }
}
