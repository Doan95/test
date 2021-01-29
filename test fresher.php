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
    dd($output);
2. //Tìm tổng lớn nhất của 2 phần tử trong mảng số nguyên:

$input = [0, 100, -4, 8, 143, 5, 99, 100];
$firstMax = max($input);
array_splice($input, array_search($firstMax, $input), 1);
$secondMax = max($input);
$sum = $firstMax + $secondMax;
dd ($sum);

3.
    $input = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];


        sort($input);

        $lengthInput = count($input);

        $output = [];

        for ($i=0; $i < $lengthInput; $i++) {
            if ($i === $lengthInput - 1) {
                break;
            }


            $output[] = [
                'diff' => $input[$i + 1] - $input[$i],
                'store' => [$input[$i], $input[$i + 1]]
            ];
        }


        $diffArr = array_map(function ($element) {
            return $element['diff'];
        }, $output);


        $minDiff = min($diffArr);


        $output = array_filter($output, function($element) use ($minDiff) {
            return $element['diff'] == $minDiff;
        });


        $output = array_map(function ($element) {
            return $element['store'];
        }, $output);

        dd($output);
