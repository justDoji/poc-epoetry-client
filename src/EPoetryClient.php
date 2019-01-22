<?php

namespace OpenEuropa\EPoetry;

use OpenEuropa\EPoetry\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class EPoetryClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\findLinguisticRequest $parameters
     * @return ResultInterface|Type\findLinguisticRequestResponse
     * @throws SoapException
     */
    public function findLinguisticRequest(\OpenEuropa\EPoetry\Type\findLinguisticRequest $parameters) : \OpenEuropa\EPoetry\Type\findLinguisticRequestResponse
    {
        return $this->call('findLinguisticRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\modifyRequest $parameters
     * @return ResultInterface|Type\modifyRequestResponse
     * @throws SoapException
     */
    public function modifyRequest(\OpenEuropa\EPoetry\Type\modifyRequest $parameters) : \OpenEuropa\EPoetry\Type\modifyRequestResponse
    {
        return $this->call('modifyRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\correctTranslation $parameters
     * @return ResultInterface|Type\correctTranslationResponse
     * @throws SoapException
     */
    public function correctTranslation(\OpenEuropa\EPoetry\Type\correctTranslation $parameters) : \OpenEuropa\EPoetry\Type\correctTranslationResponse
    {
        return $this->call('correctTranslation', $parameters);
    }

    /**
     * @param RequestInterface|Type\receiveNotifications $parameters
     * @return ResultInterface|Type\receiveNotificationsResponse
     * @throws SoapException
     */
    public function receiveNotifications(\OpenEuropa\EPoetry\Type\receiveNotifications $parameters) : \OpenEuropa\EPoetry\Type\receiveNotificationsResponse
    {
        return $this->call('receiveNotifications', $parameters);
    }

    /**
     * @param RequestInterface|Type\getLinguisticRequest $parameters
     * @return ResultInterface|Type\getLinguisticRequestResponse
     * @throws SoapException
     */
    public function getLinguisticRequest(\OpenEuropa\EPoetry\Type\getLinguisticRequest $parameters) : \OpenEuropa\EPoetry\Type\getLinguisticRequestResponse
    {
        return $this->call('getLinguisticRequest', $parameters);
    }

    /**
     * @param RequestInterface|Type\createRequests $parameters
     * @return ResultInterface|Type\createRequestsResponse
     * @throws SoapException
     */
    public function createRequests(\OpenEuropa\EPoetry\Type\createRequests $parameters) : \OpenEuropa\EPoetry\Type\createRequestsResponse
    {
        return $this->call('createRequests', $parameters);
    }
}
