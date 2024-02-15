<?php

namespace App\MyDigitalSchool;

use Exception;

class TemperatureConverter
{
  public function convert($temperature, $unite)
  {
    if ($unite == 'c') {
      $fahrenheit = ($temperature * 9/5) + 32; 
      return $fahrenheit;
    }
    if ($unite == 'f') {
      $celcius = ($temperature - 32) * 5/9;
      return $celcius;
    }
    throw new Exception("Error Processing Request", 1);
  }
}
