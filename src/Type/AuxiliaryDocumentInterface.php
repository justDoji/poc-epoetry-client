<?php

namespace OpenEuropa\EPoetry\Type;

interface AuxiliaryDocumentInterface
{
    /**
     * @return string
     */
    public function getLanguage(): string;

    /**
     * @param string $language
     * @return AuxiliaryDocumentInterface
     */
    public function withLanguage(string $language): AuxiliaryDocumentInterface;
}
