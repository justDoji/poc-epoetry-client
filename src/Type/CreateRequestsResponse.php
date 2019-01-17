<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class CreateRequestsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\LinguisticRequest
     */
    private $return;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\LinguisticRequest $return
     */
    public function __construct(LinguisticRequest $return)
    {
        $this->return = $return;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\LinguisticRequest
     */
    public function getReturn(): LinguisticRequest
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
        $new->return = $return;

        return $new;
    }
}
