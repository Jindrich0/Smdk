<?php
function sumTime(string $timeOne, string $timeTwo)
{
    $timeOneArray = explode(":", $timeOne);
    $timeTwoArray = explode(":", $timeTwo);

    $sumArray = array();
    for ($i = 0; $i < 3; $i++) {
        array_push($sumArray, $timeOneArray[$i] + $timeTwoArray[$i]);
    }

    if ($sumArray[2] >= 60) {
        $sumArray[1] = $sumArray[1] + 1;
        $sumArray[2] = $sumArray[2] - 60;
    }

    if ($sumArray[1] >= 60) {
        $sumArray[0] = $sumArray[0] + 1;
        $sumArray[1] = $sumArray[1] - 60;
    }

    while ($sumArray[0] >= 24) {
        $sumArray[0] = $sumArray[0] - 24;
    }

    echo $sumArray[0] . ":" . $sumArray[1] . ":" . $sumArray[2];
}

sumTime('10:20:30', '10:20:30');
