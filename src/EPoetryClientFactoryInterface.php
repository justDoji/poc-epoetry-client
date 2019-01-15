<?php

namespace OpenEuropa\EPoetry;

use SoapClient;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class EPoetryClientFactoryInterface
 */
interface EPoetryClientFactoryInterface
{

    /**
     * @param string $wsdl
     *
     * @return ClientInterface
     */
    public function factory(string $wsdl);
}
