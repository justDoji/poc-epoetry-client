<?php


 function autoload_ae6f3c9bf402b2930432c394d37c5b2e($class)
{
    $classes = array(
        'OpenEuropa\ePoetry\Type\DGTServiceWS' => __DIR__ .'/DGTServiceWS.php',
        'OpenEuropa\ePoetry\Type\receiveNotificationsResponse' => __DIR__ .'/receiveNotificationsResponse.php',
        'OpenEuropa\ePoetry\Type\originalDocumentIn' => __DIR__ .'/originalDocumentIn.php',
        'OpenEuropa\ePoetry\Type\linguisticSections' => __DIR__ .'/linguisticSections.php',
        'OpenEuropa\ePoetry\Type\requestReference' => __DIR__ .'/requestReference.php',
        'OpenEuropa\ePoetry\Type\ContactNotFoundException' => __DIR__ .'/ContactNotFoundException.php',
        'OpenEuropa\ePoetry\Type\productReference' => __DIR__ .'/productReference.php',
        'OpenEuropa\ePoetry\Type\contactPerson' => __DIR__ .'/contactPerson.php',
        'OpenEuropa\ePoetry\Type\modifyRequest' => __DIR__ .'/modifyRequest.php',
        'OpenEuropa\ePoetry\Type\language' => __DIR__ .'/language.php',
        'OpenEuropa\ePoetry\Type\dgtNotification' => __DIR__ .'/dgtNotification.php',
        'OpenEuropa\ePoetry\Type\InternalTechnicalErrorException' => __DIR__ .'/InternalTechnicalErrorException.php',
        'OpenEuropa\ePoetry\Type\linguisticRequestIn' => __DIR__ .'/linguisticRequestIn.php',
        'OpenEuropa\ePoetry\Type\contacts' => __DIR__ .'/contacts.php',
        'OpenEuropa\ePoetry\Type\productRequests' => __DIR__ .'/productRequests.php',
        'OpenEuropa\ePoetry\Type\auxiliaryDocuments' => __DIR__ .'/auxiliaryDocuments.php',
        'OpenEuropa\ePoetry\Type\MissingOrInvalidParameterException' => __DIR__ .'/MissingOrInvalidParameterException.php',
        'OpenEuropa\ePoetry\Type\linguisticSectionIn' => __DIR__ .'/linguisticSectionIn.php',
        'OpenEuropa\ePoetry\Type\createRequestsResponse' => __DIR__ .'/createRequestsResponse.php',
        'OpenEuropa\ePoetry\Type\dgtDocumentIn' => __DIR__ .'/dgtDocumentIn.php',
        'OpenEuropa\ePoetry\Type\auxiliaryDocumentIn' => __DIR__ .'/auxiliaryDocumentIn.php',
        'OpenEuropa\ePoetry\Type\dgtDocument' => __DIR__ .'/dgtDocument.php',
        'OpenEuropa\ePoetry\Type\correctTranslationResponse' => __DIR__ .'/correctTranslationResponse.php',
        'OpenEuropa\ePoetry\Type\TemplateNotFoundException' => __DIR__ .'/TemplateNotFoundException.php',
        'OpenEuropa\ePoetry\Type\ProductNotFoundException' => __DIR__ .'/ProductNotFoundException.php',
        'OpenEuropa\ePoetry\Type\receiveNotifications' => __DIR__ .'/receiveNotifications.php',
        'OpenEuropa\ePoetry\Type\originalDocument' => __DIR__ .'/originalDocument.php',
        'OpenEuropa\ePoetry\Type\languageIn' => __DIR__ .'/languageIn.php',
        'OpenEuropa\ePoetry\Type\auxiliaryDocument' => __DIR__ .'/auxiliaryDocument.php',
        'OpenEuropa\ePoetry\Type\findLinguisticRequest' => __DIR__ .'/findLinguisticRequest.php',
        'OpenEuropa\ePoetry\Type\createRequests' => __DIR__ .'/createRequests.php',
        'OpenEuropa\ePoetry\Type\requestGeneralInfo' => __DIR__ .'/requestGeneralInfo.php',
        'OpenEuropa\ePoetry\Type\getLinguisticRequestResponse' => __DIR__ .'/getLinguisticRequestResponse.php',
        'OpenEuropa\ePoetry\Type\getLinguisticRequest' => __DIR__ .'/getLinguisticRequest.php',
        'OpenEuropa\ePoetry\Type\linguisticSection' => __DIR__ .'/linguisticSection.php',
        'OpenEuropa\ePoetry\Type\findLinguisticRequestResponse' => __DIR__ .'/findLinguisticRequestResponse.php',
        'OpenEuropa\ePoetry\Type\correctionDocument' => __DIR__ .'/correctionDocument.php',
        'OpenEuropa\ePoetry\Type\productRequestIn' => __DIR__ .'/productRequestIn.php',
        'OpenEuropa\ePoetry\Type\requestReferenceIn' => __DIR__ .'/requestReferenceIn.php',
        'OpenEuropa\ePoetry\Type\productRequest' => __DIR__ .'/productRequest.php',
        'OpenEuropa\ePoetry\Type\RequestNotFoundException' => __DIR__ .'/RequestNotFoundException.php',
        'OpenEuropa\ePoetry\Type\requestGeneralInfoIn' => __DIR__ .'/requestGeneralInfoIn.php',
        'OpenEuropa\ePoetry\Type\PermissionDeniedException' => __DIR__ .'/PermissionDeniedException.php',
        'OpenEuropa\ePoetry\Type\linguisticRequest' => __DIR__ .'/linguisticRequest.php',
        'OpenEuropa\ePoetry\Type\correctTranslation' => __DIR__ .'/correctTranslation.php',
        'OpenEuropa\ePoetry\Type\modifyRequestResponse' => __DIR__ .'/modifyRequestResponse.php',
        'OpenEuropa\ePoetry\Type\contactPersonIn' => __DIR__ .'/contactPersonIn.php',
        'OpenEuropa\ePoetry\Type\documentTypeIn' => __DIR__ .'/documentTypeIn.php',
        'OpenEuropa\ePoetry\Type\accessLevel' => __DIR__ .'/accessLevel.php',
        'OpenEuropa\ePoetry\Type\documentType' => __DIR__ .'/documentType.php',
        'OpenEuropa\ePoetry\Type\destination' => __DIR__ .'/destination.php',
        'OpenEuropa\ePoetry\Type\slaAnnex' => __DIR__ .'/slaAnnex.php',
        'OpenEuropa\ePoetry\Type\contactRole' => __DIR__ .'/contactRole.php',
        'OpenEuropa\ePoetry\Type\documentFormat' => __DIR__ .'/documentFormat.php',
        'OpenEuropa\ePoetry\Type\languageCode' => __DIR__ .'/languageCode.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ae6f3c9bf402b2930432c394d37c5b2e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
