<?php

class TempConvert extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'FahrenheitToCelsius' => '\\FahrenheitToCelsius',
      'FahrenheitToCelsiusResponse' => '\\FahrenheitToCelsiusResponse',
      'CelsiusToFahrenheit' => '\\CelsiusToFahrenheit',
      'CelsiusToFahrenheitResponse' => '\\CelsiusToFahrenheitResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.w3schools.com/xml/tempconvert.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param FahrenheitToCelsius $parameters
     * @return FahrenheitToCelsiusResponse
     */
    public function FahrenheitToCelsius(FahrenheitToCelsius $parameters)
    {
      return $this->__soapCall('FahrenheitToCelsius', array($parameters));
    }

    /**
     * @param CelsiusToFahrenheit $parameters
     * @return CelsiusToFahrenheitResponse
     */
    public function CelsiusToFahrenheit(CelsiusToFahrenheit $parameters)
    {
      return $this->__soapCall('CelsiusToFahrenheit', array($parameters));
    }

}
