<?php

function get_numbers($arr) {
    $numbers = [];
    foreach ($arr as $el) {
        if (is_int($el) || is_float($el))
            array_push($numbers, $el);
    }
    return $numbers;
}
