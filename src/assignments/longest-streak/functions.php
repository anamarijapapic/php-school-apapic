<?php

function longest_streak($arr) {
    
    if (!empty($arr)) {
        $streak = 1;
        $longest_streak = 1;
    }
    else {
        $streak = 0;
        $longest_streak = 0;
    }

    for ($i = 0; $i < count($arr) - 1; $i++) {
        
        $d1 = new DateTime($arr[$i]);
        
        $j = $i + 1;
        while (true) {
            $d2 = new DateTime($arr[$j]);

            $interval = $d1->diff($d2);

            if ($interval->days == 1) {
                // streak continues
                $streak++;
                if ($j != count($arr) - 1) {
                    // avoid array index getting out of range 
                    $j++;
                }
                else {
                    // array ends without breaking the on-going streak
                    $streak++;
                    if ($longest_streak < $streak)
                        $longest_streak = $streak;
                    break;
                }
            }
            else {
                // streak breaks
                if ($longest_streak < $streak)
                    $longest_streak = $streak;
                $streak = 2;
                break;
            }
        }
    }

    return $longest_streak;
}
