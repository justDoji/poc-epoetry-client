<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class InternalTechnicalErrorException implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $uid;

    /**
     * Constructor
     *
     * @var string $message
     * @var string $uid
     */
    public function __construct(string $message, string $uid)
    {
        $this->message = $message;
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return InternalTechnicalErrorException
     */
    public function withMessage(string $message): InternalTechnicalErrorException
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     * @return InternalTechnicalErrorException
     */
    public function withUid(string $uid): InternalTechnicalErrorException
    {
        $new = clone $this;
        $new->uid = $uid;

        return $new;
    }
}
