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
    public function __construct($id, $internalTechnicalId)
    {
        $this->id = $id;
        $this->internalTechnicalId = $internalTechnicalId;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RequestReferenceIn
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternalTechnicalId()
    {
        return $this->internalTechnicalId;
    }

    /**
     * @param string $internalTechnicalId
     * @return RequestReferenceIn
     */
    public function withInternalTechnicalId($internalTechnicalId)
    {
        $new = clone $this;
        $new->internalTechnicalId = $internalTechnicalId;

        return $new;
    }


}

