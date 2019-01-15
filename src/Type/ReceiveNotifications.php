<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ReceiveNotifications implements RequestInterface, ResultInterface
{

    /**
     * Constructor
     */
    public function __construct()
    {
    }
}
