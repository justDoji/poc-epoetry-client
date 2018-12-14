<?php

namespace OpenEuropa\ePoetry\Type;

class DGTServiceWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'receiveNotificationsResponse' => 'OpenEuropa\\ePoetry\\Type\\receiveNotificationsResponse',
      'originalDocumentIn' => 'OpenEuropa\\ePoetry\\Type\\originalDocumentIn',
      'linguisticSections' => 'OpenEuropa\\ePoetry\\Type\\linguisticSections',
      'requestReference' => 'OpenEuropa\\ePoetry\\Type\\requestReference',
      'ContactNotFoundException' => 'OpenEuropa\\ePoetry\\Type\\ContactNotFoundException',
      'productReference' => 'OpenEuropa\\ePoetry\\Type\\productReference',
      'contactPerson' => 'OpenEuropa\\ePoetry\\Type\\contactPerson',
      'modifyRequest' => 'OpenEuropa\\ePoetry\\Type\\modifyRequest',
      'language' => 'OpenEuropa\\ePoetry\\Type\\language',
      'dgtNotification' => 'OpenEuropa\\ePoetry\\Type\\dgtNotification',
      'InternalTechnicalErrorException' => 'OpenEuropa\\ePoetry\\Type\\InternalTechnicalErrorException',
      'linguisticRequestIn' => 'OpenEuropa\\ePoetry\\Type\\linguisticRequestIn',
      'contacts' => 'OpenEuropa\\ePoetry\\Type\\contacts',
      'productRequests' => 'OpenEuropa\\ePoetry\\Type\\productRequests',
      'auxiliaryDocuments' => 'OpenEuropa\\ePoetry\\Type\\auxiliaryDocuments',
      'MissingOrInvalidParameterException' => 'OpenEuropa\\ePoetry\\Type\\MissingOrInvalidParameterException',
      'linguisticSectionIn' => 'OpenEuropa\\ePoetry\\Type\\linguisticSectionIn',
      'createRequestsResponse' => 'OpenEuropa\\ePoetry\\Type\\createRequestsResponse',
      'dgtDocumentIn' => 'OpenEuropa\\ePoetry\\Type\\dgtDocumentIn',
      'auxiliaryDocumentIn' => 'OpenEuropa\\ePoetry\\Type\\auxiliaryDocumentIn',
      'dgtDocument' => 'OpenEuropa\\ePoetry\\Type\\dgtDocument',
      'correctTranslationResponse' => 'OpenEuropa\\ePoetry\\Type\\correctTranslationResponse',
      'TemplateNotFoundException' => 'OpenEuropa\\ePoetry\\Type\\TemplateNotFoundException',
      'ProductNotFoundException' => 'OpenEuropa\\ePoetry\\Type\\ProductNotFoundException',
      'receiveNotifications' => 'OpenEuropa\\ePoetry\\Type\\receiveNotifications',
      'originalDocument' => 'OpenEuropa\\ePoetry\\Type\\originalDocument',
      'languageIn' => 'OpenEuropa\\ePoetry\\Type\\languageIn',
      'auxiliaryDocument' => 'OpenEuropa\\ePoetry\\Type\\auxiliaryDocument',
      'findLinguisticRequest' => 'OpenEuropa\\ePoetry\\Type\\findLinguisticRequest',
      'createRequests' => 'OpenEuropa\\ePoetry\\Type\\createRequests',
      'requestGeneralInfo' => 'OpenEuropa\\ePoetry\\Type\\requestGeneralInfo',
      'getLinguisticRequestResponse' => 'OpenEuropa\\ePoetry\\Type\\getLinguisticRequestResponse',
      'getLinguisticRequest' => 'OpenEuropa\\ePoetry\\Type\\getLinguisticRequest',
      'linguisticSection' => 'OpenEuropa\\ePoetry\\Type\\linguisticSection',
      'findLinguisticRequestResponse' => 'OpenEuropa\\ePoetry\\Type\\findLinguisticRequestResponse',
      'correctionDocument' => 'OpenEuropa\\ePoetry\\Type\\correctionDocument',
      'productRequestIn' => 'OpenEuropa\\ePoetry\\Type\\productRequestIn',
      'requestReferenceIn' => 'OpenEuropa\\ePoetry\\Type\\requestReferenceIn',
      'productRequest' => 'OpenEuropa\\ePoetry\\Type\\productRequest',
      'RequestNotFoundException' => 'OpenEuropa\\ePoetry\\Type\\RequestNotFoundException',
      'requestGeneralInfoIn' => 'OpenEuropa\\ePoetry\\Type\\requestGeneralInfoIn',
      'PermissionDeniedException' => 'OpenEuropa\\ePoetry\\Type\\PermissionDeniedException',
      'linguisticRequest' => 'OpenEuropa\\ePoetry\\Type\\linguisticRequest',
      'correctTranslation' => 'OpenEuropa\\ePoetry\\Type\\correctTranslation',
      'modifyRequestResponse' => 'OpenEuropa\\ePoetry\\Type\\modifyRequestResponse',
      'contactPersonIn' => 'OpenEuropa\\ePoetry\\Type\\contactPersonIn',
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
