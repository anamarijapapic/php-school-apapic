<?php

function is_christmas($date_str) {
    $date = new DateTime($date_str);
    if ($date->format('m-d') === '12-25')
        return true;
    return false;
}
