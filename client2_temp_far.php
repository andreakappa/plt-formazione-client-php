<?php

require 'output/autoload.php';

$service = new \TempConvert();
$request = new \CelsiusToFahrenheit(30);

$response = $service->CelsiusToFahrenheit($request);

echo "Converted is: " . $response->getCelsiusToFahrenheitResult();
