<?php

class FahrenheitToCelsius
{

    /**
     * @var string $Fahrenheit
     */
    protected $Fahrenheit = null;

    /**
     * @param string $Fahrenheit
     */
    public function __construct($Fahrenheit)
    {
      $this->Fahrenheit = $Fahrenheit;
    }

    /**
     * @return string
     */
    public function getFahrenheit()
    {
      return $this->Fahrenheit;
    }

    /**
     * @param string $Fahrenheit
     * @return FahrenheitToCelsius
     */
    public function setFahrenheit($Fahrenheit)
    {
      $this->Fahrenheit = $Fahrenheit;
      return $this;
    }

}
