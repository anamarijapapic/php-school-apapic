<?php

function longest_word($str) {
    $words = explode(" ", $str);

    $lengths = array_map('strlen', $words);
    $index = array_search(max($lengths), $lengths);

    return $words[$index];
}
