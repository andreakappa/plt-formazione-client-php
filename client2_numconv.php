<?php

require './numconv/autoload.php';

$service = new \NumberConversion();
$request = new \NumberToWords(30);

$response = $service->NumberToWords($request);


echo "Number is: " . $response->getNumberToWordsResult();
