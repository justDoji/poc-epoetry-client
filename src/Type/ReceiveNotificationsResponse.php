<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ReceiveNotificationsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\dgtNotification
     */
    private $return;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\dgtNotification $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\dgtNotification
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\dgtNotification $return
     * @return ReceiveNotificationsResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
