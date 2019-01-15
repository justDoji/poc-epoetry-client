<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class GetLinguisticRequestResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    private $return;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\linguisticRequest $return
     */
    public function __construct(linguisticRequest $return)
    {
        $this->return = $return;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\linguisticRequest
     */
    public function getReturn(): linguisticRequest
    {
        return $this->return;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\linguisticRequest $return
     * @return GetLinguisticRequestResponse
     */
    public function withReturn(linguisticRequest $return): GetLinguisticRequestResponse
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
