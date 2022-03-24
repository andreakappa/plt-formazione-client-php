<?php


 function autoload_d6905b8696763386c703322049293579($class)
{
    $classes = array(
        'TempConvert' => __DIR__ .'/TempConvert.php',
        'FahrenheitToCelsius' => __DIR__ .'/FahrenheitToCelsius.php',
        'FahrenheitToCelsiusResponse' => __DIR__ .'/FahrenheitToCelsiusResponse.php',
        'CelsiusToFahrenheit' => __DIR__ .'/CelsiusToFahrenheit.php',
        'CelsiusToFahrenheitResponse' => __DIR__ .'/CelsiusToFahrenheitResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_d6905b8696763386c703322049293579');

// Do nothing. The rest is just leftovers from the code generation.
{
}
