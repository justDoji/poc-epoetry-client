<?php

namespace OpenEuropa\ePoetry;

use SoapClient;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class ePoetryClientFactoryInterface
 */
interface ePoetryClientFactoryInterface
{

    /**
     * @param string $wsdl
     *
     * @return ClientInterface
     */
    public function factory(string $wsdl);
}
