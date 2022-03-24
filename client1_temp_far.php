<?php

$tempConversion = "https://www.w3schools.com/xml/tempconvert.asmx?wsdl";
$client = new SoapClient($tempConversion);

$params = array("Celsius" => 20);
$response = $client->__soapCall("CelsiusToFahrenheit", array($params));

echo "Fahrenheit temperature is: " . $response->CelsiusToFahrenheitResult;
