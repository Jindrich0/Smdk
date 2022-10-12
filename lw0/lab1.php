<?php
function sumTime(string $timeOne, string $timeTwo): string
{
    $timeOneArray = explode(":", $timeOne);
    $timeTwoArray = explode(":", $timeTwo);

    $sumArray = [];
    for ($i = 0; $i < 3; $i++) {
        $sumArray[] = $timeOneArray[$i] + $timeTwoArray[$i];
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

    return $sumArray[0] . ":" . $sumArray[1] . ":" . $sumArray[2];
}

echo sumTime('20:10:30', '10:20:40');
