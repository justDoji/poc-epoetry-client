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
        return '<?xml version=\'1.0\' encoding=\'UTF-8\'?>
<S:Envelope xmlns:S="http://schemas.xmlsoap.org/soap/envelope/">
    <S:Body>
        <ns0:createRequestsResponse xmlns:ns0="http://eu.europa.ec.dgt.epoetry">
            <return statusCode="ENV">
                <reference year="2018" number="2249" part="0" version="0" id="1738" internalReference="MYREF-DEF-123456" productType="TRA" requesterCode="DGT"/>
                <generalInfo>
                    <title>Title of the Document vpi</title>
                    <internalReference>MYREF-DEF-123456</internalReference>
                    <requestedDeadline>2018-11-30T12:00:00+01:00</requestedDeadline>
                    <sensitive>false</sensitive>
                    <documentToBeAdopted>false</documentToBeAdopted>
                    <sentViaRUE>false</sentViaRUE>
                    <destinationCode>INTERNE</destinationCode>
                    <slaAnnex>ANNEX8B</slaAnnex>
                    <comment>comment</comment>
                    <accessibleTo>DIR</accessibleTo>
                </generalInfo>
                <contacts>
                    <contact firstName="" lastName="" email="" userId="paolevi" roleCode="REQUESTER"/>
                    <contact firstName="" lastName="" email="" userId="angheda" roleCode="AUTHOR"/>
                </contacts>
                <originalDocument format="TXT" type="ORI" name="test1.txt" trackChanges="false" pages="0.0">
                    <linguisticSections>
                        <linguisticSection>
                            <language code="FR"/>
                        </linguisticSection>
                        <linguisticSection>
                            <language code="EN"/>
                        </linguisticSection>
                    </linguisticSections>
                </originalDocument>
                <productRequests>
                    <productRequest requestedDeadline="2019-11-15T12:00:00+01:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="EN"/>
                    </productRequest>
                    <productRequest requestedDeadline="2019-11-15T12:00:00+01:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="DE"/>
                    </productRequest>
                    <productRequest requestedDeadline="2019-04-15T12:00:00+02:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="CS"/>
                    </productRequest>
                    <productRequest requestedDeadline="2019-11-15T12:00:00+01:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="FR"/>
                    </productRequest>
                    <productRequest formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="BG"/>
                    </productRequest>
                </productRequests>
                <auxiliaryDocuments>
                    <auxiliaryDocument format="TXT" type="REF" name="test1.txt" language="RO"/>
                    <auxiliaryDocument format="TXT" type="REF" name="test1.txt" language="ML"/>
                </auxiliaryDocuments>
            </return>
            <return statusCode="ENV">
                <reference year="2018" number="2251" part="0" version="0" id="1739" internalReference="MYREF-DEF-123456" productType="TRA" requesterCode="DGT"/>
                <generalInfo>
                    <title>Title of the Document vpi</title>
                    <internalReference>MYREF-DEF-123456</internalReference>
                    <requestedDeadline>2018-11-30T12:00:00+01:00</requestedDeadline>
                    <sensitive>false</sensitive>
                    <documentToBeAdopted>false</documentToBeAdopted>
                    <sentViaRUE>false</sentViaRUE>
                    <destinationCode>INTERNE</destinationCode>
                    <slaAnnex>ANNEX8B</slaAnnex>
                    <comment>comment</comment>
                    <accessibleTo>DIR</accessibleTo>
                </generalInfo>
                <contacts>
                    <contact firstName="" lastName="" email="" userId="paolevi" roleCode="REQUESTER"/>
                    <contact firstName="" lastName="" email="" userId="angheda" roleCode="AUTHOR"/>
                </contacts>
                <originalDocument format="TXT" type="ORI" name="test1.txt" trackChanges="false" pages="0.0">
                    <linguisticSections>
                        <linguisticSection>
                            <language code="FR"/>
                        </linguisticSection>
                        <linguisticSection>
                            <language code="EN"/>
                        </linguisticSection>
                    </linguisticSections>
                </originalDocument>
                <productRequests>
                    <productRequest requestedDeadline="2019-11-15T12:00:00+01:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="FR"/>
                    </productRequest>
                    <productRequest requestedDeadline="2019-11-15T12:00:00+01:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="EN"/>
                    </productRequest>
                    <productRequest formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="BG"/>
                    </productRequest>
                    <productRequest requestedDeadline="2019-04-15T12:00:00+02:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="CS"/>
                    </productRequest>
                    <productRequest requestedDeadline="2019-11-15T12:00:00+01:00" formatCode="NA" statusCode="ENV" trackChanges="false">
                        <language code="DE"/>
                    </productRequest>
                </productRequests>
                <auxiliaryDocuments>
                    <auxiliaryDocument format="TXT" type="REF" name="test1.txt" language="ML"/>
                    <auxiliaryDocument format="TXT" type="REF" name="test1.txt" language="RO"/>
                </auxiliaryDocuments>
            </return>
        </ns0:createRequestsResponse>
    </S:Body>
</S:Envelope>';
    }
}
