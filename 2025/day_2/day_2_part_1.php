<?php

$data = explode(',', file_get_contents('./input.txt'));
$result = 0;

foreach ($data as $range) {
    $range = explode('-', $range);
    $start = (int) $range[0];
    $end = (int) $range[1];
    $diff = $end - $start;

    for ($i = 0; $i <= $diff; $i++) {
        $number = (string) ($start + $i);
        $len = strlen($number);

        if ($len % 2 != 0) {
            continue;
        }

        $valid = false;
        $half = $len / 2;
        for ($j = 0; $j < $half; $j++) {
            if ($number[$j] !== $number[$half + $j]) {
                $valid = true;
                break;
            }
        }

        if (!$valid) {
            $result += (int) $number;
        } 
    }
}

print_r($result);
