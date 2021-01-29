<?php
// 1. cấu trúc lại mảng
    $input = [11, 2, 8, 10, 5, 99, 1, 8, 9];
    $output = [];

    for ($i = 1; $i < 10; $i++) {
        $matchArr = array_filter($input, function ($value) use ($i) {
            return substr(strval($value), 0, 1) == $i;
        });
        $output = array_merge($output, $matchArr);
    }
    echo($output);
2. //Tìm tổng lớn nhất của 2 phần tử trong mảng số nguyên:

$input = [0, 100, -4, 8, 143, 5, 99, 100];
$firstMax = max($input);
array_splice($input, array_search($firstMax, $input), 1);
$secondMax = max($input);
$sum = $firstMax + $secondMax;
echo ($sum);
