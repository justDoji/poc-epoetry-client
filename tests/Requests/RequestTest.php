<?php

namespace OpenEuropa\ePoetry\Tests\Requests;

use OpenEuropa\ePoetry\ePoetryClient;
use OpenEuropa\ePoetry\Tests\AbstractTest;
use OpenEuropa\ePoetry\Type\AuxiliaryDocumentIn;
use OpenEuropa\ePoetry\Type\ContactPerson;
use OpenEuropa\ePoetry\Type\Contacts;
use OpenEuropa\ePoetry\Type\CreateRequests;
use OpenEuropa\ePoetry\Type\Language;
use OpenEuropa\ePoetry\Type\LinguisticRequestIn;
use OpenEuropa\ePoetry\Type\LinguisticSection;
use OpenEuropa\ePoetry\Type\LinguisticSections;
use OpenEuropa\ePoetry\Type\OriginalDocumentIn;
use OpenEuropa\ePoetry\Type\ProductRequest;
use OpenEuropa\ePoetry\Type\ProductRequests;
use OpenEuropa\ePoetry\Type\RequestGeneralInfo;
use OpenEuropa\ePoetry\Type\RequestReference;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Psr7\Response;

/**
 * Class RequestTest
 *
 * @package OpenEuropa\TaskRunner\Tests\Services
 */
class RequestTest extends AbstractTest
{
    public function testTest() {

        $this->assertInstanceOf(ePoetryClient::class, $this->client, 'Wrong Client object received.');

        // Generate Reference.
        $year = 2018;
        $number = 1;
        $part = 0;
        $version = 0;
        $id = 1;
        $internalReference = '1';
        $internalTechnicalId = '1';
        $productType = 'TRA';
        $requesterCode = 'WEB';
        $reference = new RequestReference($year, $number, $part, $version, $id, $internalReference, $internalTechnicalId, $productType, $requesterCode);
        $this->assertEquals($reference->getYear(), $year);

        // Generate General Info.
        $title = 'Test';
        $requestedDeadline = new \DateTime('2020-02-02');
        $sensitive = false;
        $documentToBeAdopted = true;
        $decideReference = 'decideReference';
        $sentViaRUE = true;
        // @todo get value from lib.
        $destinationCode = 'PUBLIC';
        // @todo get value from lib.
        $slaAnnex = NULL;
        $slaCommitment = '';
        $comment = '';
        $onBehalfOf = '';
        // @todo get value from lib.
        $accessibleTo = NULL;
        $requestingService = '';
        $serviceOfOrigin = '';
        $generalInfo = new RequestGeneralInfo($title, $internalReference, $internalTechnicalId, $requestedDeadline, $sensitive, $documentToBeAdopted, $decideReference, $sentViaRUE, $destinationCode, $slaAnnex, $slaCommitment, $comment, $onBehalfOf, $accessibleTo, $requestingService, $serviceOfOrigin);
        $this->assertEquals($generalInfo->getTitle(), $title);

        // Generate Contacts.
        $firstName = 'Eunice';
        $lastName = 'Tomas';
        $email = 'email@example.com';
        $userId = '1';
        $roleCode = NULL;
        $contact = new ContactPerson($firstName, $lastName, $email, $userId, $roleCode);
        $contacts = new Contacts($contact);
        $this->assertEquals($contacts->getContact()->getEmail(), $email);

        // Generate Original Document
        $file = 'dGVzdA==';
        $trackChanges = false;
        $originalDocument = new OriginalDocumentIn($file, 'DOC', 'ORI', 'ari.doc', $trackChanges);
        $this->assertEquals($originalDocument->getTrackChanges(), false);

        // Generate Product Requests.
        $language = new Language('fr');
        $requestedDeadline = new \DateTime('2020-02-02');
        $acceptedDeadline = new \DateTime('2020-02-02');
        $formatCode = '';
        $statusCode = '';
        $trackChanges = false;
        $internalProductReference = '1';
        $productRequest = new ProductRequest($language, $requestedDeadline, $acceptedDeadline, $formatCode, $statusCode, $trackChanges, $internalProductReference);
        $productRequests = new ProductRequests($productRequest);
        $this->assertEquals($productRequests->getProductRequest()->getLanguage()->getCode(), 'fr');

        // Generate Auxiliary Documents.
        $language = new Language('fr');
        $file = 'dGVzdA==';
        $AuxiliaryDocument = new AuxiliaryDocumentIn($file, 'DOC', 'ORI', 'aux.doc', $language);
        $this->assertEquals($AuxiliaryDocument->getLanguage(), $language);

        // Generate Linguistic Request.
        $linguisticRequest = new LinguisticRequestIn($generalInfo, $contacts, $originalDocument, $productRequests, $AuxiliaryDocument);

        // Define missing arguments for Request.
        $relatedRequest = NULL;
        $templateName = 'WEB';

        $parameters = new CreateRequests($linguisticRequest, $relatedRequest, $templateName);

        // Mock response.
        $response = $this->createMock(ResponseInterface::class);
        $mockResponse = new Response(200, ['xxx' => 'yyy'], file_get_contents(__DIR__ . '/../fixtures/1-create-2-request-response.xml'));
        $response->method('getBody')->willReturn($mockResponse->getBody());
        $response->method('getHeaders')->willReturn($mockResponse->getHeaders());
        $this->mockClient->addResponse($response);

        // Make request.
        $response = $this->client->createRequests($parameters);

        // Test request.
        $debug = $this->client->debugLastSoapRequest();
        $request = $debug['request'];
        $this->assertContains('ecas:ProxyTicket: DESKTOP_PT-21-9fp9', $request['headers'], 'Request XML header malformed, missing ticket.');
        $this->assertContains("<title>$title</title>", $request['body'], 'Request XML body malformed, missing title.');

        // Test response.
        /** @var \OpenEuropa\ePoetry\Type\LinguisticRequest $return */
        $return = current($response->getReturn());
        $this->assertEquals($return->getStatusCode(), 'ENV', 'Response error, wrong status.');
        $this->assertEquals($return->getGeneralInfo()->getTitle(), 'Title of the Document', 'Response error, wrong title.');

    }

}