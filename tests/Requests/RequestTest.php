<?php

namespace OpenEuropa\EPoetry\Tests\Requests;

use GuzzleHttp\Psr7\Response;
use OpenEuropa\EPoetry\EPoetryClient;
use OpenEuropa\EPoetry\Tests\AbstractTest;
use OpenEuropa\EPoetry\Type\AuxiliaryDocumentIn;
use OpenEuropa\EPoetry\Type\ContactPerson;
use OpenEuropa\EPoetry\Type\Contacts;
use OpenEuropa\EPoetry\Type\CreateRequests;
use OpenEuropa\EPoetry\Type\Enumeration\DocumentType;
use OpenEuropa\EPoetry\Type\Language;
use OpenEuropa\EPoetry\Type\Enumeration\DocumentFormat;
use OpenEuropa\EPoetry\Type\Enumeration\DocumentType as DocumentTypeEnum;
use OpenEuropa\EPoetry\Type\Enumeration\LanguageCode;
use OpenEuropa\EPoetry\Type\LinguisticRequestIn;
use OpenEuropa\EPoetry\Type\OriginalDocumentIn;
use OpenEuropa\EPoetry\Type\ProductRequest;
use OpenEuropa\EPoetry\Type\ProductRequests;
use OpenEuropa\EPoetry\Type\RequestGeneralInfo;
use OpenEuropa\EPoetry\Type\RequestReference;
use Psr\Http\Message\ResponseInterface;

/**
 * Class RequestTest
 *
 * @package OpenEuropa\TaskRunner\Tests\Services
 */
class RequestTest extends AbstractTest
{
    public function testRequest() {

        $this->assertInstanceOf(EPoetryClient::class, $this->client, 'Wrong Client object received.');

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
        $originalDocument = new OriginalDocumentIn($file, DocumentFormat::DOC, DocumentTypeEnum::ORI, 'ari.doc', $trackChanges);
        $this->assertEquals($originalDocument->isTrackChanges(), false);

        // Generate Product Requests.
        $language = new Language(LanguageCode::FR);
        $requestedDeadline = new \DateTime('2020-02-02');
        $acceptedDeadline = new \DateTime('2020-02-02');
        $formatCode = '';
        $statusCode = '';
        $trackChanges = false;
        $internalProductReference = '1';
        $productRequest = new ProductRequest($language, $requestedDeadline, $acceptedDeadline, $formatCode, $statusCode, $trackChanges, $internalProductReference);
        $productRequests = new ProductRequests($productRequest);
        $this->assertEquals($productRequests->getProductRequest()->getLanguage()->getCode(), LanguageCode::FR);

        // Generate Auxiliary Documents.
        $file = 'dGVzdA==';
        $AuxiliaryDocument = new AuxiliaryDocumentIn($file, DocumentFormat::DOC, DocumentTypeEnum::ORI, 'aux.doc', $language);
        $this->assertEquals($AuxiliaryDocument->getLanguage()->getCode(), LanguageCode::FR);

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
        /** @var \OpenEuropa\EPoetry\Type\LinguisticRequest $return */
        $return = current($response->getReturn());
        $this->assertEquals($return->getStatusCode(), 'ENV', 'Response error, wrong status.');
        $this->assertEquals($return->getGeneralInfo()->getTitle(), 'Title of the Document', 'Response error, wrong title.');

    }

}