<?php

require './output/autoload.php';
require './numconv/autoload.php';


$input = $argv[1];


$temperatureConverterService = new \TempConvert();
$tempConvertRequest = new \CelsiusToFahrenheit($input);
$tempConvertResponse = $temperatureConverterService->CelsiusToFahrenheit($tempConvertRequest);

$tempFahrenheit = $tempConvertResponse->getCelsiusToFahrenheitResult();

echo " $input °C = $tempFahrenheit °F\n";

//Now convert in words

$numconvService = new \NumberConversion();
$numconvRequestF = new \NumberToWords($tempFahrenheit);
$numconvResponseF = $numconvService->NumberToWords($numconvRequestF);
$fahrenheit  = $numconvResponseF->getNumberToWordsResult();

$numconvRequestC = new \NumberToWords($input);
$numconvResponseC = $numconvService->NumberToWords($numconvRequestC);
$celsius  = $numconvResponseC->getNumberToWordsResult();

echo "$celsius °C equals $fahrenheit °F \n";
