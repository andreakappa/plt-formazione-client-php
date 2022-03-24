<?php

class CelsiusToFahrenheitResponse
{

    /**
     * @var string $CelsiusToFahrenheitResult
     */
    protected $CelsiusToFahrenheitResult = null;

    /**
     * @param string $CelsiusToFahrenheitResult
     */
    public function __construct($CelsiusToFahrenheitResult)
    {
      $this->CelsiusToFahrenheitResult = $CelsiusToFahrenheitResult;
    }

    /**
     * @return string
     */
    public function getCelsiusToFahrenheitResult()
    {
      return $this->CelsiusToFahrenheitResult;
    }

    /**
     * @param string $CelsiusToFahrenheitResult
     * @return CelsiusToFahrenheitResponse
     */
    public function setCelsiusToFahrenheitResult($CelsiusToFahrenheitResult)
    {
      $this->CelsiusToFahrenheitResult = $CelsiusToFahrenheitResult;
      return $this;
    }

}
