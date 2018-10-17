<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class FindLinguisticRequestResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\linguisticRequest
     */
    private $return;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\linguisticRequest $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\linguisticRequest
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\linguisticRequest $return
     * @return FindLinguisticRequestResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

