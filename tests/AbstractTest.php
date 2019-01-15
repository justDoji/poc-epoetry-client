<?php

namespace OpenEuropa\EPoetry\Tests;

use PHPUnit\Framework\TestCase;
use OpenEuropa\EPoetry\EPoetryClient;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\ClientBuilder;
use Symfony\Component\EventDispatcher\EventDispatcher;
use OpenEuropa\EPoetry\Tests\Subscribers\RequestSubscriber;
use OpenEuropa\EPoetry\EPoetryClassmap;
use OpenEuropa\EPoetry\Tests\Middleware\MockMiddleware;
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
     * @var EPoetryClient
     */
    public $client;

    /**
     * @inheritDoc
     */
    protected function setUp()
    {
        $wsdl = 'dgtServiceWSDL.xml';
        $clientFactory = new ClientFactory(EPoetryClient::class);
        $soapOptions = [
            'cache_wsdl' => WSDL_CACHE_NONE
        ];

        $dispatcher = new EventDispatcher();
        $dispatcher->addSubscriber(new RequestSubscriber());

        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, $soapOptions);
        $clientBuilder->withEventDispatcher($dispatcher);
        $clientBuilder->withClassMaps(EPoetryClassmap::getCollection());

        $this->mockClient = new MockCLient();
        $handler = HttPlugHandle::createForClient($this->mockClient);
        $handler->addMiddleware(new MockMiddleware());
        $clientBuilder->withHandler($handler);
        $this->client = $clientBuilder->build();

        parent::setUp();
    }

}