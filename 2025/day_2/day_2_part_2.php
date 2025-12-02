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
        $max = floor($len / 2);

        $pairLen = 1;
        while ($pairLen <= $max) {
            $pairs = str_split($number, $pairLen);
            $valid = true;

            for ($j = 0; $j < count($pairs) - 1; $j++) {
                if ($pairs[$j] !== $pairs[$j + 1]) {
                    $valid = false;
                    break;
                }
            }

            if ($valid) {
                $result += (int) $number;
                break;
            }

            $pairLen++;
        }
    }
}

print_r($result);
