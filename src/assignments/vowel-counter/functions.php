<?php

function is_vowel($letter) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    if (in_array($letter, $vowels))
        return true;
    return false;
}

function count_vowels($str) {
    $arr = str_split($str);
    $counts = array_count_values($arr);

    $cnt = 0;
    foreach($counts as $key => $value) {
        if(is_vowel($key)) { 
            $cnt += $value; 
        }
    }

    return $cnt;
}