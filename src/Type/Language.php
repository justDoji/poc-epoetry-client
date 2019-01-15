<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class Language implements RequestInterface, ResultInterface
{

    /**
     * @var string
     */
    private $code;

    /**
     * Constructor
     *
     * @var string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Language
     */
    public function withCode(string $code): Language
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }
}
