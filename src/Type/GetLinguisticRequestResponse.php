<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetLinguisticRequestResponse implements RequestInterface, ResultInterface
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
     * @return GetLinguisticRequestResponse
     */
    public function withReturn(LinguisticRequest $return): GetLinguisticRequestResponse
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
