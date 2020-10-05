<?php

include("vendor/autoload.php");

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => 'https://webservices.cibg.nl/Ribiz/OpenbaarV4.asmx?wsdl',
        'outputDir' => './big/',
        'namespaceName' => 'JustDevs\BIGRegister'
    ))
);