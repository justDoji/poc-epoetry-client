<?php

namespace OpenEuropa\ePoetry;
die;
use OpenEuropa\ePoetry\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class ePoetryClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\findLinguisticRequest $parameters
     * @return ResultInterface|Type\findLinguisticRequestResponse
     * @throws SoapException
     */
    public function findLinguisticRequest(\OpenEuropa\ePoetry\Type\findLinguisticRequest $parameters) : \OpenEuropa\ePoetry\Type\findLinguisticRequestResponse
    {
        return $this->call('findLinguisticRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\modifyRequest $parameters
     * @return ResultInterface|Type\modifyRequestResponse
     * @throws SoapException
     */
    public function modifyRequest(\OpenEuropa\ePoetry\Type\modifyRequest $parameters) : \OpenEuropa\ePoetry\Type\modifyRequestResponse
    {
        return $this->call('modifyRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\correctTranslation $parameters
     * @return ResultInterface|Type\correctTranslationResponse
     * @throws SoapException
     */
    public function correctTranslation(\OpenEuropa\ePoetry\Type\correctTranslation $parameters) : \OpenEuropa\ePoetry\Type\correctTranslationResponse
    {
        return $this->call('correctTranslation', $parameters);
    }

    /**
     * @param RequestInterface|Type\receiveNotifications $parameters
     * @return ResultInterface|Type\receiveNotificationsResponse
     * @throws SoapException
     */
    public function receiveNotifications(\OpenEuropa\ePoetry\Type\receiveNotifications $parameters) : \OpenEuropa\ePoetry\Type\receiveNotificationsResponse
    {
        return $this->call('receiveNotifications', $parameters);
    }

    /**
     * @param RequestInterface|Type\getLinguisticRequest $parameters
     * @return ResultInterface|Type\getLinguisticRequestResponse
     * @throws SoapException
     */
    public function getLinguisticRequest(\OpenEuropa\ePoetry\Type\getLinguisticRequest $parameters) : \OpenEuropa\ePoetry\Type\getLinguisticRequestResponse
    {
        return $this->call('getLinguisticRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\createRequests $parameters
     * @return ResultInterface|Type\createRequestsResponse
     * @throws SoapException
     */
    public function createRequests(\OpenEuropa\ePoetry\Type\createRequests $parameters) : \OpenEuropa\ePoetry\Type\createRequestsResponse
    {
        return $this->call('createRequests', $parameters);
    }


}

