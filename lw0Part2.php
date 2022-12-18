<?php

$time1 = $argv[1];
$time2 = $argv[2];

echo $time = sumTime($time1, $time2);

function sumTime(string $time1, string $time2): string
{

    if (!preg_match("#^[0-9\:]+$#", $time1))
        return "Ошибка ! В строке не должно быть символьных значений !";

    if (!preg_match("#^[0-9\:]+$#", $time2))
        return "Ошибка ! В строке не должно быть символьных значений !";

    $timePieces1 = explode(":", $time1);
    $timePieces2 = explode(":", $time2);

    $summedTime[0] = $timePieces1[0] + $timePieces2[0];
    if ($summedTime[0] >= 24) {
        $summedTime[0] -= 24;
    }

    $summedTime[1] = $timePieces1[1] + $timePieces2[1];
    if ($summedTime[1] >= 60) {
        $summedTime[0] += 1;
        $summedTime[1] -= 24;
    }

    $summedTime[2] = $timePieces1[2] + $timePieces2[2];
    if ($summedTime[2] >= 60) {
        $summedTime[1] += 1;
        $summedTime[2] -= 60;
    }

    return implode(":", $summedTime);
}
