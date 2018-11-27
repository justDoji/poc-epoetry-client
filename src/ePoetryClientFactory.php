<?php

namespace OpenEuropa\ePoetry;

use OpenEuropa\ePoetry\ePoetryClient;
use OpenEuropa\ePoetry\ePoetryClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class ePoetryClientFactory implements ePoetryClientFactoryInterface
{

    public function factory(string $wsdl) : \OpenEuropa\ePoetry\ePoetryClient
    {
        $clientFactory = new PhproClientFactory(ePoetryClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(ePoetryClassmap::getCollection());

        return $clientBuilder->build();
    }


}

