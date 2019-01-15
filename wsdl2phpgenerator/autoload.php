<?php


 function autoload_ae6f3c9bf402b2930432c394d37c5b2e($class)
{
    $classes = array(
        'OpenEuropa\EPoetry\Type\DGTServiceWS' => __DIR__ .'/DGTServiceWS.php',
        'OpenEuropa\EPoetry\Type\receiveNotificationsResponse' => __DIR__ .'/receiveNotificationsResponse.php',
        'OpenEuropa\EPoetry\Type\originalDocumentIn' => __DIR__ .'/originalDocumentIn.php',
        'OpenEuropa\EPoetry\Type\linguisticSections' => __DIR__ .'/linguisticSections.php',
        'OpenEuropa\EPoetry\Type\requestReference' => __DIR__ .'/requestReference.php',
        'OpenEuropa\EPoetry\Type\ContactNotFoundException' => __DIR__ .'/ContactNotFoundException.php',
        'OpenEuropa\EPoetry\Type\productReference' => __DIR__ .'/productReference.php',
        'OpenEuropa\EPoetry\Type\contactPerson' => __DIR__ .'/contactPerson.php',
        'OpenEuropa\EPoetry\Type\modifyRequest' => __DIR__ .'/modifyRequest.php',
        'OpenEuropa\EPoetry\Type\language' => __DIR__ .'/language.php',
        'OpenEuropa\EPoetry\Type\dgtNotification' => __DIR__ .'/dgtNotification.php',
        'OpenEuropa\EPoetry\Type\InternalTechnicalErrorException' => __DIR__ .'/InternalTechnicalErrorException.php',
        'OpenEuropa\EPoetry\Type\linguisticRequestIn' => __DIR__ .'/linguisticRequestIn.php',
        'OpenEuropa\EPoetry\Type\contacts' => __DIR__ .'/contacts.php',
        'OpenEuropa\EPoetry\Type\productRequests' => __DIR__ .'/productRequests.php',
        'OpenEuropa\EPoetry\Type\auxiliaryDocuments' => __DIR__ .'/auxiliaryDocuments.php',
        'OpenEuropa\EPoetry\Type\MissingOrInvalidParameterException' => __DIR__ .'/MissingOrInvalidParameterException.php',
        'OpenEuropa\EPoetry\Type\linguisticSectionIn' => __DIR__ .'/linguisticSectionIn.php',
        'OpenEuropa\EPoetry\Type\createRequestsResponse' => __DIR__ .'/createRequestsResponse.php',
        'OpenEuropa\EPoetry\Type\dgtDocumentIn' => __DIR__ .'/dgtDocumentIn.php',
        'OpenEuropa\EPoetry\Type\auxiliaryDocumentIn' => __DIR__ .'/auxiliaryDocumentIn.php',
        'OpenEuropa\EPoetry\Type\dgtDocument' => __DIR__ .'/dgtDocument.php',
        'OpenEuropa\EPoetry\Type\correctTranslationResponse' => __DIR__ .'/correctTranslationResponse.php',
        'OpenEuropa\EPoetry\Type\TemplateNotFoundException' => __DIR__ .'/TemplateNotFoundException.php',
        'OpenEuropa\EPoetry\Type\ProductNotFoundException' => __DIR__ .'/ProductNotFoundException.php',
        'OpenEuropa\EPoetry\Type\receiveNotifications' => __DIR__ .'/receiveNotifications.php',
        'OpenEuropa\EPoetry\Type\originalDocument' => __DIR__ .'/originalDocument.php',
        'OpenEuropa\EPoetry\Type\languageIn' => __DIR__ .'/languageIn.php',
        'OpenEuropa\EPoetry\Type\auxiliaryDocument' => __DIR__ .'/auxiliaryDocument.php',
        'OpenEuropa\EPoetry\Type\findLinguisticRequest' => __DIR__ .'/findLinguisticRequest.php',
        'OpenEuropa\EPoetry\Type\createRequests' => __DIR__ .'/createRequests.php',
        'OpenEuropa\EPoetry\Type\requestGeneralInfo' => __DIR__ .'/requestGeneralInfo.php',
        'OpenEuropa\EPoetry\Type\getLinguisticRequestResponse' => __DIR__ .'/getLinguisticRequestResponse.php',
        'OpenEuropa\EPoetry\Type\getLinguisticRequest' => __DIR__ .'/getLinguisticRequest.php',
        'OpenEuropa\EPoetry\Type\linguisticSection' => __DIR__ .'/linguisticSection.php',
        'OpenEuropa\EPoetry\Type\findLinguisticRequestResponse' => __DIR__ .'/findLinguisticRequestResponse.php',
        'OpenEuropa\EPoetry\Type\correctionDocument' => __DIR__ .'/correctionDocument.php',
        'OpenEuropa\EPoetry\Type\productRequestIn' => __DIR__ .'/productRequestIn.php',
        'OpenEuropa\EPoetry\Type\requestReferenceIn' => __DIR__ .'/requestReferenceIn.php',
        'OpenEuropa\EPoetry\Type\productRequest' => __DIR__ .'/productRequest.php',
        'OpenEuropa\EPoetry\Type\RequestNotFoundException' => __DIR__ .'/RequestNotFoundException.php',
        'OpenEuropa\EPoetry\Type\requestGeneralInfoIn' => __DIR__ .'/requestGeneralInfoIn.php',
        'OpenEuropa\EPoetry\Type\PermissionDeniedException' => __DIR__ .'/PermissionDeniedException.php',
        'OpenEuropa\EPoetry\Type\linguisticRequest' => __DIR__ .'/linguisticRequest.php',
        'OpenEuropa\EPoetry\Type\correctTranslation' => __DIR__ .'/correctTranslation.php',
        'OpenEuropa\EPoetry\Type\modifyRequestResponse' => __DIR__ .'/modifyRequestResponse.php',
        'OpenEuropa\EPoetry\Type\contactPersonIn' => __DIR__ .'/contactPersonIn.php',
        'OpenEuropa\EPoetry\Type\documentTypeIn' => __DIR__ .'/documentTypeIn.php',
        'OpenEuropa\EPoetry\Type\accessLevel' => __DIR__ .'/accessLevel.php',
        'OpenEuropa\EPoetry\Type\documentType' => __DIR__ .'/documentType.php',
        'OpenEuropa\EPoetry\Type\destination' => __DIR__ .'/destination.php',
        'OpenEuropa\EPoetry\Type\slaAnnex' => __DIR__ .'/slaAnnex.php',
        'OpenEuropa\EPoetry\Type\contactRole' => __DIR__ .'/contactRole.php',
        'OpenEuropa\EPoetry\Type\documentFormat' => __DIR__ .'/documentFormat.php',
        'OpenEuropa\EPoetry\Type\languageCode' => __DIR__ .'/languageCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ae6f3c9bf402b2930432c394d37c5b2e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
