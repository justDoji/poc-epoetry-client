<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CreateRequests implements RequestInterface, ResultInterface
{

    /**
     * @var array \OpenEuropa\EPoetry\Type\LinguisticRequestIn
     */
    private $linguisticRequest = [];

    /**
     * @var \OpenEuropa\EPoetry\Type\RequestReferenceIn
     */
    private $relatedRequest;

    /**
     * @var string
     */
    private $templateName;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\RequestReferenceIn $relatedRequest
     * @var string $templateName
     */
    public function __construct(RequestReferenceIn $relatedRequest, string $templateName)
    {
        $this->relatedRequest = $relatedRequest;
        $this->templateName = $templateName;
    }

    /**
     * @return array \OpenEuropa\EPoetry\Type\LinguisticRequestIn
     */
    public function getLinguisticRequest(): array
    {
        return $this->linguisticRequest;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\LinguisticRequestIn $linguisticRequest
     * @return CreateRequests
     */
    public function withLinguisticRequest(LinguisticRequestIn $linguisticRequest): CreateRequests
    {
        $new = clone $this;
        $new->linguisticRequest[] = $linguisticRequest;

        return $new;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\RequestReferenceIn
     */
    public function getRelatedRequest(): RequestReferenceIn
    {
        return $this->relatedRequest;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\RequestReferenceIn $relatedRequest
     * @return CreateRequests
     */
    public function withRelatedRequest(RequestReferenceIn $relatedRequest): CreateRequests
    {
        $new = clone $this;
        $new->relatedRequest = $relatedRequest;

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
     * @return CreateRequests
     */
    public function withTemplateName(string $templateName): CreateRequests
    {
        $new = clone $this;
        $new->templateName = $templateName;

        return $new;
    }
}
