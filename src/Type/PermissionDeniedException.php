<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class PermissionDeniedException implements RequestInterface, ResultInterface
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
     * @return PermissionDeniedException
     */
    public function withMessage(string $message): PermissionDeniedException
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
     * @return PermissionDeniedException
     */
    public function withUid(string $uid): PermissionDeniedException
    {
        $new = clone $this;
        $new->uid = $uid;

        return $new;
    }
}
