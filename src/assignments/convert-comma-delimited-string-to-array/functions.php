<?php

function to_array($str) {
    if (!empty($str))
        return explode(",", $str);
    return [];
}
