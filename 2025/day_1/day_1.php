<?php

$turns = file("./input.txt", FILE_IGNORE_NEW_LINES);
$start = 50;
$result = 0;

foreach ($turns as $turn) {
    $n = (int) substr($turn, 1);

    if ($turn[0] == "L") {
        $start -= $n;
        if ($start < 0) {
            $start = (100 + ($start % 100)) % 100;
        }
    }
    else {
        $start += $n;

        if ($start > 99) {
            $start %= 100;
        }
    }

    if ($start == 0) {
        $result++;
    }
}
    

print_r($result);
