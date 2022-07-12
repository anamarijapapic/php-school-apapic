<?php

function celsius_to_fahrenheit($celsius) {
    # F = C * 9/5 + 32
    $fahrenheit = (float) $celsius * 9/5 + 32;
    return number_format($fahrenheit, 2, '.', '');
}
