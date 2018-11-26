<?php

namespace OpenEuropa\ePoetry\Tests;

use PHPUnit\Framework\TestCase;
use OpenEuropa\ePoetry\ePoetryClient;
use OpenEuropa\ePoetry\ePoetryClientFactory;
use Phpro\SoapClient\ClientBuilder;

/**
 * Class AbstractTest
 *
 * @package OpenEuropa\TaskRunner\Tests
 */
abstract class AbstractTest extends TestCase
{

    /**
     * @inheritDoc
     */
    protected function setUp()
    {

        $wsdl = 'dgtServiceWSDL.xml';
        $clientFactory = new ePoetryClientFactory(ePoetryClient::class);
        $soapOptions = [
            'cache_wsdl' => WSDL_CACHE_NONE
        ];

        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, $soapOptions);
        $client = $clientBuilder->build();


        parent::setUp();
    }

}