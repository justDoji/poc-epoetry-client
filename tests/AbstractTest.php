<?php

namespace OpenEuropa\ePoetry\Tests;

use PHPUnit\Framework\TestCase;
use OpenEuropa\ePoetry\ePoetryClient;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;

/**
 * Class AbstractTest
 *
 * @package OpenEuropa\TaskRunner\Tests
 */
abstract class AbstractTest extends TestCase
{

    /**
     * @var ePoetryClient
     */
    public $client;

    /**
     * @inheritDoc
     */
    protected function setUp()
    {

        $wsdl = 'dgtServiceWSDL.xml';
        $clientFactory = new ClientFactory(ePoetryClient::class);
        $soapOptions = [
            'cache_wsdl' => WSDL_CACHE_NONE
        ];

        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, $soapOptions);
        $this->client = $clientBuilder->build();

        parent::setUp();
    }

}