<?php

namespace OpenEuropa\EPoetry\Tests\Requests;

use GuzzleHttp\Psr7\Response;
use OpenEuropa\EPoetry\EPoetryClient;
use OpenEuropa\EPoetry\Tests\AbstractTest;
use OpenEuropa\EPoetry\Type\AuxiliaryDocumentIn;
use OpenEuropa\EPoetry\Type\AuxiliaryDocuments;
use OpenEuropa\EPoetry\Type\ContactPersonIn;
use OpenEuropa\EPoetry\Type\Contacts;
use OpenEuropa\EPoetry\Type\CreateRequests;
use OpenEuropa\EPoetry\Type\Enumeration\ContactRole;
use OpenEuropa\EPoetry\Type\Enumeration\DocumentType;
use OpenEuropa\EPoetry\Type\Language;
use OpenEuropa\EPoetry\Type\Enumeration\DocumentFormat;
use OpenEuropa\EPoetry\Type\Enumeration\DocumentType as DocumentTypeEnum;
use OpenEuropa\EPoetry\Type\Enumeration\LanguageCode;
use OpenEuropa\EPoetry\Type\LinguisticRequestIn;
use OpenEuropa\EPoetry\Type\OriginalDocumentIn;
use OpenEuropa\EPoetry\Type\ProductRequestIn;
use OpenEuropa\EPoetry\Type\ProductRequests;
use OpenEuropa\EPoetry\Type\RequestGeneralInfoIn;
use OpenEuropa\EPoetry\Type\RequestReferenceIn;
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

        // Generate General Info.
        $title = 'Test';
        $internalReference = '1';
        $internalTechnicalId = '1';
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
        $generalInfo = new RequestGeneralInfoIn($title, $internalReference, $internalTechnicalId, $requestedDeadline, $sensitive, $documentToBeAdopted, $decideReference, $sentViaRUE, $destinationCode, $slaAnnex, $slaCommitment, $comment, $onBehalfOf, $accessibleTo);
        $this->assertEquals($generalInfo->getTitle(), $title);

        // Generate Contacts.
        $contacts = new Contacts();
        $contacts = $contacts->withContact(new ContactPersonIn('1', ContactRole::AUTHOR));
        $contacts = $contacts->withContact(new ContactPersonIn('2', ContactRole::EDITOR));
        $this->assertEquals($contacts->getContact()[0]->getUserId(), '1');

        // Generate Original Document
        $file = 'dGVzdA==';
        $trackChanges = false;
        $originalDocument = new OriginalDocumentIn($file, DocumentFormat::DOC, DocumentTypeEnum::ORI, 'ari.doc', $trackChanges);
        $this->assertEquals($originalDocument->isTrackChanges(), false);

        // Generate Product Requests.
        $language = new Language(LanguageCode::FR);
        $requestedDeadline = new \DateTime('2020-02-02');
        $trackChanges = false;
        $internalProductReference = '1';
        $productRequest = new ProductRequestIn($language, $requestedDeadline, $internalProductReference, $trackChanges);
        $productRequests = new ProductRequests($productRequest);
        $this->assertEquals($productRequests->getProductRequest()->getLanguage()->getCode(), LanguageCode::FR);

        // Generate Auxiliary Documents.
        $file = 'dGVzdA==';
        $AuxiliaryDocument = new AuxiliaryDocumentIn($file, DocumentFormat::DOC, DocumentTypeEnum::ORI, 'aux.doc', LanguageCode::FR);
        $this->assertEquals($AuxiliaryDocument->getLanguage(), LanguageCode::FR);
        $AuxiliaryDocuments = new AuxiliaryDocuments($AuxiliaryDocument);

        // Generate Linguistic Request.
        $linguisticRequest = new LinguisticRequestIn($generalInfo, $contacts, $originalDocument, $productRequests, $AuxiliaryDocuments);

        // Define missing arguments for Request.
        $relatedRequest = new RequestReferenceIn(123, 'ref123');
        $templateName = 'WEB';

        // All arguments are ready, create the request.
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
        $this->assertContains('<contact userId="1" roleCode="AUTHOR"/>', $request['body'], 'Request XML body malformed, missing contact.');

        // Test response.
        /** @var \OpenEuropa\EPoetry\Type\LinguisticRequest $return */
        $return = current($response->getReturn());
        $this->assertEquals($return->getStatusCode(), 'ENV', 'Response error, wrong status.');
        $this->assertEquals($return->getGeneralInfo()->getTitle(), 'Title of the Document', 'Response error, wrong title.');

    }
}
