<?php

namespace OpenEuropa\ePoetry\Tests\Middleware;

use \Phpro\SoapClient\Middleware\MiddleWare;
use \Http\Promise\Promise;
use \Psr\Http\Message\ResponseInterface;
use \Psr\Http\Message\RequestInterface;


use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

use Psr\Http\Message\Uri;

use Phpro\SoapClient\Soap\Handler\HttPlugHandle;

class MockMiddleware extends MiddleWare
{
    public function getName(): string
    {
        return 'mock_middleware';
    }

    public function beforeRequest(callable $next, RequestInterface $request): Promise
    {
        return $next($request);
    }

    public function afterResponse(ResponseInterface $response): ResponseInterface
    {

        return $response;
    }
}