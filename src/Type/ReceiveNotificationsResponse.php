<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ReceiveNotificationsResponse implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\dgtNotification
     */
    private $return;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\dgtNotification $return
     */
    public function __construct($return)
    {
        $this->return = $return;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\dgtNotification
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\dgtNotification $return
     * @return ReceiveNotificationsResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}

