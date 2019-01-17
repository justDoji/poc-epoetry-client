<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class RequestReferenceIn implements RequestInterface, ResultInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $internalTechnicalId;

    /**
     * Constructor
     *
     * @var int $id
     * @var string $internalTechnicalId
     */
    public function __construct(int $id, string $internalTechnicalId)
    {
        $this->id = $id;
        $this->internalTechnicalId = $internalTechnicalId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RequestReferenceIn
     */
    public function withId(int $id): RequestReferenceIn
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternalTechnicalId(): string
    {
        return $this->internalTechnicalId;
    }

    /**
     * @param string $internalTechnicalId
     * @return RequestReferenceIn
     */
    public function withInternalTechnicalId(string $internalTechnicalId): RequestReferenceIn
    {
        $new = clone $this;
        $new->internalTechnicalId = $internalTechnicalId;

        return $new;
    }
}
