<?php

namespace OpenEuropa\ePoetry\Tests;

use PHPUnit\Framework\TestCase;
use OpenEuropa\ePoetry\ePoetryClient;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;
use Symfony\Component\EventDispatcher\EventDispatcher;
use OpenEuropa\ePoetry\Tests\Subscribers\RequestSubscriber;
use OpenEuropa\ePoetry\ePoetryClassmap;
use OpenEuropa\ePoetry\Tests\Middleware\MockMiddleware;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Http\Mock\Client as MockClient;

/**
 * Class AbstractTest
 *
 * @package OpenEuropa\TaskRunner\Tests
 */
abstract class AbstractTest extends TestCase
{

    /**
     * @var mockClient
     */
    protected $mockClient;

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

        $this->mockClient = new MockCLient();
        $handler = HttPlugHandle::createForClient($this->mockClient);
        $handler->addMiddleware(new MockMiddleware());
        $clientBuilder->withHandler($handler);
        $this->client = $clientBuilder->build();

        parent::setUp();
    }

}