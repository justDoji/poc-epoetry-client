<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CreateRequestsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var array \OpenEuropa\EPoetry\Type\LinguisticRequest
     */
    private $return = [];

    /**
     * @return array \OpenEuropa\EPoetry\Type\LinguisticRequest
     */
    public function getReturn(): array
    {
        return $this->return;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\LinguisticRequest $return
     * @return CreateRequestsResponse
     */
    public function withReturn(LinguisticRequest $return): CreateRequestsResponse
    {
        $new = clone $this;
        $new->return[] = $return;

        return $new;
    }
}
