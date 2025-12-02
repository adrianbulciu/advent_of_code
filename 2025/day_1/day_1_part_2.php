<?php

$turns = file("./input.txt", FILE_IGNORE_NEW_LINES);

$start = 50;
$result = 0;

foreach ($turns as $turn) {
    $turns = (int) substr($turn, 1);
    $startIsZero = $start == 0;

    for ($i = 1; $i <= $turns; $i++) {
        $start += ($turn[0] == 'L' ? -1 : 1);

        if ($start == 0 && $i == $turns) {
            $result++;
        } 
        else if ($start < 0) {
            $start = 99;
            if ($startIsZero) {
                $startIsZero = false;
                continue;
            }
            $result++;
        }
        else if ($start > 99) {
            $start = 0;

            if ($startIsZero && $i < 99) {
                $startIsZero = false;
                continue;
            }
            $result++;
        }
    }
}

print_r($result);
