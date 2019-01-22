<?php

namespace OpenEuropa\EPoetry\Type;

interface LanguageInterface
{
    /**
     * @return string
     */
    public function getCode(): string;

    /**
     * @param string $code
     * @return LanguageIn
     */
    public function withCode(string $code): LanguageInterface;
}
