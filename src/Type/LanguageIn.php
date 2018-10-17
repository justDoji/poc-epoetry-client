<?php

namespace OpenEuropa\ePoetry\Type;

use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LanguageIn implements RequestInterface, ResultInterface
{

    /**
     * @var \OpenEuropa\ePoetry\Type\languageCode
     */
    private $code;

    /**
     * Constructor
     *
     * @var \OpenEuropa\ePoetry\Type\languageCode $code
     */
    public function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * @return \OpenEuropa\ePoetry\Type\languageCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param \OpenEuropa\ePoetry\Type\languageCode $code
     * @return LanguageIn
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }


}

