<?php

namespace OpenEuropa\EPoetry\Tests\Subscribers;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Phpro\SoapClient\Events;
use Phpro\SoapClient\Event\RequestEvent;
use SoapHeader;

class RequestSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            Events::REQUEST  => 'test',
        ];
    }

    /**
     * @param RequestEvent $event
     *
     * @throws \Phpro\SoapClient\Exception\RequestException
     */
    public function test(RequestEvent $event) {

        // $header = new SoapHeader();

        // $client->applySoapHeaders();
    }
}
