<?php

class CelsiusToFahrenheit
{

    /**
     * @var string $Celsius
     */
    protected $Celsius = null;

    /**
     * @param string $Celsius
     */
    public function __construct($Celsius)
    {
      $this->Celsius = $Celsius;
    }

    /**
     * @return string
     */
    public function getCelsius()
    {
      return $this->Celsius;
    }

    /**
     * @param string $Celsius
     * @return CelsiusToFahrenheit
     */
    public function setCelsius($Celsius)
    {
      $this->Celsius = $Celsius;
      return $this;
    }

}
