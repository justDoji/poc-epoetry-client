<?php

declare(strict_types=1);

namespace OpenEuropa\ePoetry\Tests;

use Http\Client\HttpClient;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Phpro\SoapClient\Middleware\CollectLastRequestInfoMiddleware;
use Phpro\SoapClient\Middleware\MiddlewareSupportingInterface;
use Phpro\SoapClient\Soap\HttpBinding\Converter\Psr7Converter;
use Phpro\SoapClient\Soap\HttpBinding\LastRequestInfo;
use Phpro\SoapClient\Soap\HttpBinding\SoapRequest;
use Phpro\SoapClient\Soap\HttpBinding\SoapResponse;
use Phpro\SoapClient\Soap\Handler\HandlerInterface;
use Phpro\SoapClient\Soap\Handler\LastRequestInfoCollectorInterface;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class MockHttPlugHandle extends HttPlugHandle implements HandlerInterface, MiddlewareSupportingInterface, LastRequestInfoCollectorInterface
{
    /**
     * @var HttpClient
     */
    private $client;

    /**
     * @var LastRequestInfoCollectorInterface
     */
    private $lastRequestInfoCollector;

    /**
     * @var Psr7Converter
     */
    private $converter;

    /**
     * @var array
     */
    private $middlewares = [];

    /**
     * @var string
     */
    private $requestContent;

    /**
     * @inheritdoc
     */
    public function __construct(
        HttpClient $client,
        Psr7Converter $converter,
        CollectLastRequestInfoMiddleware $lastRequestInfoCollector
    ) {
        $this->client = $client;
        $this->converter = $converter;
        $this->lastRequestInfoCollector = $lastRequestInfoCollector;
    }

    /**
     * @inheritdoc
     */
    public static function createForClient(HttpClient $client): HttPlugHandle
    {
        return new self(
            $client,
            new Psr7Converter(
                MessageFactoryDiscovery::find(),
                StreamFactoryDiscovery::find()
            ),
            new CollectLastRequestInfoMiddleware()
        );
    }

    /**
     * @inheritdoc
     */
    public function request(SoapRequest $request): SoapResponse
    {
        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar'], $this->getResponseBody())
        ]);

        $handler = HandlerStack::create($mock);
        $this->client = new Client(['handler' => $handler]);

        $psr7Request = $this->converter->convertSoapRequest($request);
        $psr7Response = $this->client->sendRequest($psr7Request->getUri());

        // Lame trick to get the request for collectLastRequestInfo.
        $this->requestContent = $psr7Request->getBody()->getContents();

        $response = $this->converter->convertSoapResponse($psr7Response);

        return $response;
    }

    /**
     * @inheritdoc
     */
    public function collectLastRequestInfo(): LastRequestInfo
    {
        $lastRequestInfo = new LastRequestInfo(
            '',
            $this->requestContent,
            '',
            ''
        );

        return $lastRequestInfo;
    }

    /**
     * Get response in fixture.
     *
     * @return false|string
     */
    private function getResponseBody()
    {
        $xml = file_get_contents(__DIR__ . '/fixtures/1-create-2-request-response.xml');
        return $xml;
    }
}
