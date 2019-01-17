<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ReceiveNotificationsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\EPoetry\Type\DgtNotification
     */
    private $return;

    /**
     * Constructor
     *
     * @var \OpenEuropa\EPoetry\Type\DgtNotification $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return \OpenEuropa\EPoetry\Type\DgtNotification
     */
    public function getReturn(): DgtNotification
    {
        return $this->return;
    }

    /**
     * @param \OpenEuropa\EPoetry\Type\DgtNotification $return
     * @return ReceiveNotificationsResponse
     */
    public function withReturn(DgtNotification $return): ReceiveNotificationsResponse
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}
