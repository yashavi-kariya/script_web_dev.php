<?php


function celsiusToFahrenheit($celsius)
{
    return ($celsius * 9/5) + 32;
}

$celsiusTemperature = 20; 
$fahrenheitTemperature = celsiusToFahrenheit($celsiusTemperature);

echo "{$celsiusTemperature} degrees Celsius is equal to {$fahrenheitTemperature} degrees Fahrenheit.";
?>