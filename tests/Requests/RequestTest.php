<?php

namespace OpenEuropa\ePoetry\Tests\Requests;

use OpenEuropa\ePoetry\Tests\AbstractTest;
use OpenEuropa\ePoetry\ePoetryClient;

/**
 * Class RequestTest
 *
 * @package OpenEuropa\TaskRunner\Tests\Services
 */
class RequestTest extends AbstractTest
{
    public function testTest() {

        $this->assertInstanceOf(ePoetryClient::class, $this->client, 'Wrong Client object received.');
    }

}