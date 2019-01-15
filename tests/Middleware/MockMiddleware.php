<?php

namespace OpenEuropa\EPoetry\Tests\Middleware;

use Phpro\SoapClient\Middleware\MiddleWare;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

class MockMiddleware extends MiddleWare
{
    public function getName(): string
    {
        return 'mock_middleware';
    }

    public function beforeRequest(callable $next, RequestInterface $request): Promise
    {
        // Add Proxy Ticket.
        $request = $request->withHeader('ecas:ProxyTicket', 'DESKTOP_PT-21-9fp9');

        return $next($request);
    }
}