<?php

function cardinal_to_ordinal($cardinalNumber) {
    if ($cardinalNumber % 100 == 11 || $cardinalNumber % 100 == 12 || $cardinalNumber % 100 == 13)
        $extension = "th";
    else if ($cardinalNumber % 10 == 1)
        $extension = "st";
    else if ($cardinalNumber % 10 == 2)
        $extension = "nd";
    else if ($cardinalNumber % 10 == 3)
        $extension = "rd";
    else
        $extension = "th";

    $ordinalNumber = $cardinalNumber . $extension;
    return $ordinalNumber;
}
