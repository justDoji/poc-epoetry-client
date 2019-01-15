<?php

namespace OpenEuropa\EPoetry\Type;

class DGTServiceWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'receiveNotificationsResponse' => 'OpenEuropa\\EPoetry\\Type\\receiveNotificationsResponse',
      'originalDocumentIn' => 'OpenEuropa\\EPoetry\\Type\\originalDocumentIn',
      'linguisticSections' => 'OpenEuropa\\EPoetry\\Type\\linguisticSections',
      'requestReference' => 'OpenEuropa\\EPoetry\\Type\\requestReference',
      'ContactNotFoundException' => 'OpenEuropa\\EPoetry\\Type\\ContactNotFoundException',
      'productReference' => 'OpenEuropa\\EPoetry\\Type\\productReference',
      'contactPerson' => 'OpenEuropa\\EPoetry\\Type\\contactPerson',
      'modifyRequest' => 'OpenEuropa\\EPoetry\\Type\\modifyRequest',
      'language' => 'OpenEuropa\\EPoetry\\Type\\language',
      'dgtNotification' => 'OpenEuropa\\EPoetry\\Type\\dgtNotification',
      'InternalTechnicalErrorException' => 'OpenEuropa\\EPoetry\\Type\\InternalTechnicalErrorException',
      'linguisticRequestIn' => 'OpenEuropa\\EPoetry\\Type\\linguisticRequestIn',
      'contacts' => 'OpenEuropa\\EPoetry\\Type\\contacts',
      'productRequests' => 'OpenEuropa\\EPoetry\\Type\\productRequests',
      'auxiliaryDocuments' => 'OpenEuropa\\EPoetry\\Type\\auxiliaryDocuments',
      'MissingOrInvalidParameterException' => 'OpenEuropa\\EPoetry\\Type\\MissingOrInvalidParameterException',
      'linguisticSectionIn' => 'OpenEuropa\\EPoetry\\Type\\linguisticSectionIn',
      'createRequestsResponse' => 'OpenEuropa\\EPoetry\\Type\\createRequestsResponse',
      'dgtDocumentIn' => 'OpenEuropa\\EPoetry\\Type\\dgtDocumentIn',
      'auxiliaryDocumentIn' => 'OpenEuropa\\EPoetry\\Type\\auxiliaryDocumentIn',
      'dgtDocument' => 'OpenEuropa\\EPoetry\\Type\\dgtDocument',
      'correctTranslationResponse' => 'OpenEuropa\\EPoetry\\Type\\correctTranslationResponse',
      'TemplateNotFoundException' => 'OpenEuropa\\EPoetry\\Type\\TemplateNotFoundException',
      'ProductNotFoundException' => 'OpenEuropa\\EPoetry\\Type\\ProductNotFoundException',
      'receiveNotifications' => 'OpenEuropa\\EPoetry\\Type\\receiveNotifications',
      'originalDocument' => 'OpenEuropa\\EPoetry\\Type\\originalDocument',
      'languageIn' => 'OpenEuropa\\EPoetry\\Type\\languageIn',
      'auxiliaryDocument' => 'OpenEuropa\\EPoetry\\Type\\auxiliaryDocument',
      'findLinguisticRequest' => 'OpenEuropa\\EPoetry\\Type\\findLinguisticRequest',
      'createRequests' => 'OpenEuropa\\EPoetry\\Type\\createRequests',
      'requestGeneralInfo' => 'OpenEuropa\\EPoetry\\Type\\requestGeneralInfo',
      'getLinguisticRequestResponse' => 'OpenEuropa\\EPoetry\\Type\\getLinguisticRequestResponse',
      'getLinguisticRequest' => 'OpenEuropa\\EPoetry\\Type\\getLinguisticRequest',
      'linguisticSection' => 'OpenEuropa\\EPoetry\\Type\\linguisticSection',
      'findLinguisticRequestResponse' => 'OpenEuropa\\EPoetry\\Type\\findLinguisticRequestResponse',
      'correctionDocument' => 'OpenEuropa\\EPoetry\\Type\\correctionDocument',
      'productRequestIn' => 'OpenEuropa\\EPoetry\\Type\\productRequestIn',
      'requestReferenceIn' => 'OpenEuropa\\EPoetry\\Type\\requestReferenceIn',
      'productRequest' => 'OpenEuropa\\EPoetry\\Type\\productRequest',
      'RequestNotFoundException' => 'OpenEuropa\\EPoetry\\Type\\RequestNotFoundException',
      'requestGeneralInfoIn' => 'OpenEuropa\\EPoetry\\Type\\requestGeneralInfoIn',
      'PermissionDeniedException' => 'OpenEuropa\\EPoetry\\Type\\PermissionDeniedException',
      'linguisticRequest' => 'OpenEuropa\\EPoetry\\Type\\linguisticRequest',
      'correctTranslation' => 'OpenEuropa\\EPoetry\\Type\\correctTranslation',
      'modifyRequestResponse' => 'OpenEuropa\\EPoetry\\Type\\modifyRequestResponse',
      'contactPersonIn' => 'OpenEuropa\\EPoetry\\Type\\contactPersonIn',
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'dgtServiceWSDL.xml';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param findLinguisticRequest $parameters
     * @return findLinguisticRequestResponse
     */
    public function findLinguisticRequest(findLinguisticRequest $parameters)
    {
      return $this->__soapCall('findLinguisticRequest', array($parameters));
    }

    /**
     * @param modifyRequest $parameters
     * @return modifyRequestResponse
     */
    public function modifyRequest(modifyRequest $parameters)
    {
      return $this->__soapCall('modifyRequest', array($parameters));
    }

    /**
     * @param correctTranslation $parameters
     * @return correctTranslationResponse
     */
    public function correctTranslation(correctTranslation $parameters)
    {
      return $this->__soapCall('correctTranslation', array($parameters));
    }

    /**
     * @param receiveNotifications $parameters
     * @return receiveNotificationsResponse
     */
    public function receiveNotifications(receiveNotifications $parameters)
    {
      return $this->__soapCall('receiveNotifications', array($parameters));
    }

    /**
     * @param getLinguisticRequest $parameters
     * @return getLinguisticRequestResponse
     */
    public function getLinguisticRequest(getLinguisticRequest $parameters)
    {
      return $this->__soapCall('getLinguisticRequest', array($parameters));
    }

    /**
     * @param createRequests $parameters
     * @return createRequestsResponse
     */
    public function createRequests(createRequests $parameters)
    {
      return $this->__soapCall('createRequests', array($parameters));
    }

}
