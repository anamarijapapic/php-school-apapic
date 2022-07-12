<?php

function longest_common_ending($str1, $str2) {
    $str1 = strrev($str1);
    $str2 = strrev($str2);

    $length = min(strlen($str1), strlen($str2));

    $commonEnding = '';
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] == $str2[$i])
            $commonEnding .= $str1[$i];
    }
    
    return strrev($commonEnding);
}
