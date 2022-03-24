<?php

require 'vendor/autoload.php';

$wsdl_url = "https://www.w3schools.com/xml/tempconvert.asmx?wsdl";

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => $wsdl_url,
        'outputDir' => './output'
    ))
);

//php proxy.php
//http://www.webservicex.net/CurrencyConvertor.asmx?WSDL