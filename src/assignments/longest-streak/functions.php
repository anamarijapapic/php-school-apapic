<?php

function longest_streak($arr) {
    
    if (empty($arr)) {
        $streak_days = [ 0 ] ;
    }
    else {
        $streak_days = [ 1 ];
    }

    for ($i = 0; $i < count($arr) - 1; $i++) {
        $streak_dates = [];

        $d1 = new DateTime($arr[$i]);
        array_push($streak_dates, $d1);

        $j = $i + 1;
        while (true) {
            $d2 = new DateTime($arr[$j]);
            $interval = $d1->diff($d2);
            if ($interval->days == 1) {
                // streak continues
                array_push($streak_dates, $d2);
                $d1 = $d2;
            }
            else {
                // streak breaks
                array_push($streak_days, count($streak_dates));
                break;
            }
            if ($j != count($arr) - 1) {
                // avoid array index getting out of range 
                $j++;
            }
        }
    }

    $longest_streak = max($streak_days);
    return $longest_streak;
}