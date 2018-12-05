<?php

namespace OpenEuropa\ePoetry\Tests;

use Phpro\SoapClient\Soap\HttpBinding\SoapRequest;
use Phpro\SoapClient\Soap\HttpBinding\SoapResponse;

use Phpro\SoapClient\Soap\Handler\LocalSoapServerHandle;
use Phpro\SoapClient\Soap\Handler\HandlerInterface;
use Phpro\SoapClient\Soap\Handler\LastRequestInfoCollectorInterface;

use Phpro\SoapClient\Soap\HttpBinding\LastRequestInfo;
//use Phpro\SoapClient\Soap\HttpBinding\SoapRequest;
//use Phpro\SoapClient\Soap\HttpBinding\SoapResponse;
use SoapServer;

/**
 * Mock SoapHandle.
 */
class MockSoapServerHandle extends LocalSoapServerHandle implements HandlerInterface, LastRequestInfoCollectorInterface
{
    /**
     * @var SoapServer
     */
    private $server;

    /**
     * @var LastRequestInfo
     */
    private $lastRequestInfo;

    public function __construct(SoapServer $server)
    {
        $this->server = $server;
        $this->lastRequestInfo = LastRequestInfo::createEmpty();
    }

    /**
     * @param SoapRequest $request
     *
     * @return SoapResponse
     */
    public function request(SoapRequest $request): SoapResponse
    {
        $responseBody = $this->getResponseBody();

        $this->lastRequestInfo = new LastRequestInfo(
            '',
            $request->getRequest(),
            '',
            $responseBody
        );

        return new SoapResponse($responseBody);
    }

    /**
     * @return LastRequestInfo
     */
    public function collectLastRequestInfo(): LastRequestInfo
    {
        return $this->lastRequestInfo;
    }

    private function getResponseBody()
    {
        $xml = file_get_contents(__DIR__ . '/fixtures/1-create-2-request-response.xml');
        return $xml;
    }
}
