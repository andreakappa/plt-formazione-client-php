<?php
require './numconv/autoload.php';

$num = $argv[1];

$service = new \NumberConversion();
$request = new \NumberToWords($num);

$response = $service->NumberToWords($request);


echo "Words for Number $num are: " . $response->getNumberToWordsResult();
