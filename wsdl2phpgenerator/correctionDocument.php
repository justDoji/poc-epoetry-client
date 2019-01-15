<?php

namespace OpenEuropa\EPoetry\Type;

class correctionDocument extends dgtDocument
{

    /**
     * @param documentFormat $format
     * @param documentType $type
     * @param string $name
     */
    public function __construct($format, $type, $name)
    {
      parent::__construct($format, $type, $name);
    }

}
