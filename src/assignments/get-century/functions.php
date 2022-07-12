<?php

function get_century($year) {
    if ($year % 100)
        $century = (int) ($year / 100) + 1;
    else
        $century = (int) ($year / 100);
    return $century;
}
