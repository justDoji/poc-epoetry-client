<?php

namespace OpenEuropa\ePoetry\Tests;

use PHPUnit\Framework\TestCase;
use OpenEuropa\ePoetry\ePoetryClient;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;

use Symfony\Component\EventDispatcher\EventDispatcher;
use OpenEuropa\ePoetry\Tests\Subscribers\RequestSubscriber;
use OpenEuropa\ePoetry\ePoetryClassmap;

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

        $dispatcher = new EventDispatcher();
        $dispatcher->addSubscriber(new RequestSubscriber());

        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, $soapOptions);
        $clientBuilder->withEventDispatcher($dispatcher);
        $clientBuilder->withClassMaps(ePoetryClassmap::getCollection());
        $clientBuilder->withHandler(new MockSoapServerHandle(new \SoapServer($wsdl)));
        $this->client = $clientBuilder->build();

        parent::setUp();
    }

}