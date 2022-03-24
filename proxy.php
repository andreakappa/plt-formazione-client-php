<?php

require 'vendor/autoload.php';

$wsdl_url = "https://www.w3schools.com/xml/tempconvert.asmx?wsdl";
$numberConversion = "https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl";

$outdir = "./numconv";
mkdir($outdir);

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
    new \Wsdl2PhpGenerator\Config(array(
        'inputFile' => $numberConversion,
        'outputDir' => './numconv'
    ))
);

//php proxy.php
//http://www.webservicex.net/CurrencyConvertor.asmx?WSDL