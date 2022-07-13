<?php

function has_friday_the_13th($year, $month) {
    $date = DateTime::createFromFormat('Y-m-d', $year . "-" . $month . "-13");
    if ($date->format('D') == 'Fri')
        return true;
    return false;
}
