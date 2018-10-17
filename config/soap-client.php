<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('dgtServiceWSDL.xml')
    ->setTypeDestination('src/Type')
    ->setTypeNamespace('OpenEuropa\ePoetry\Type')
    ->setClientDestination('src')
    ->setClientName('ePoetryClient')
    ->setClientNamespace('OpenEuropa\ePoetry')
    ->setClassMapDestination('src')
    ->setClassMapName('ePoetryClassmap')
    ->setClassMapNamespace('OpenEuropa\ePoetry')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
            ]),
            '/(?<!Request)/i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ]),
            '/(?<!Response)/i'
        )
    )
;
