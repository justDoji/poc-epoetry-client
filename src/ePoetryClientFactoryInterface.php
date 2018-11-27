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
     * @param SoapClient               $soapClient
     * @param EventDispatcherInterface $dispatcher
     *
     * @return ClientInterface
     */
    public function factory(SoapClient $soapClient, EventDispatcherInterface $dispatcher);
}
