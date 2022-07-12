<?php

function convert_to_decimal($percentageString) {
    $percentage = (float) str_replace("%", "", $percentageString);
    $decimal = $percentage / 100;
    return $decimal;
}

