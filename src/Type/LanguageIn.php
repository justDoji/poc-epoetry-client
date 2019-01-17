<?php

namespace OpenEuropa\EPoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LanguageIn implements LanguageInterface, RequestInterface, ResultInterface
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
     * @return LanguageInterface
     */
    public function withCode(string $code): LanguageInterface
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }
}
