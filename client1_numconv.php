<?php

$numberConversion = "https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl";
$client = new SoapClient($numberConversion);

$params = array("ubiNum" => 20);
$response = $client->__soapCall("NumberToWords", array($params));

echo "Number in words is: " . $response->NumberToWordsResult;
