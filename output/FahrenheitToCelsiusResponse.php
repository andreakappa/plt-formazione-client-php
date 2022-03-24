<?php

class FahrenheitToCelsiusResponse
{

    /**
     * @var string $FahrenheitToCelsiusResult
     */
    protected $FahrenheitToCelsiusResult = null;

    /**
     * @param string $FahrenheitToCelsiusResult
     */
    public function __construct($FahrenheitToCelsiusResult)
    {
      $this->FahrenheitToCelsiusResult = $FahrenheitToCelsiusResult;
    }

    /**
     * @return string
     */
    public function getFahrenheitToCelsiusResult()
    {
      return $this->FahrenheitToCelsiusResult;
    }

    /**
     * @param string $FahrenheitToCelsiusResult
     * @return FahrenheitToCelsiusResponse
     */
    public function setFahrenheitToCelsiusResult($FahrenheitToCelsiusResult)
    {
      $this->FahrenheitToCelsiusResult = $FahrenheitToCelsiusResult;
      return $this;
    }

}
