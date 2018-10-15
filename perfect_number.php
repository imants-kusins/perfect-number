<?php


function getClassification(int $number)
{
    if ($number <= 0) {
        throw new Exception('The parameter must be greater than 0');
    }

    $sum = 0;
    for ($c = 1; $c < $number; $c++) {
        $sum += ($number % $c == 0) ? $c : 0;
    }

    if ($sum == $number) {
        return 'perfect';
    } elseif ($sum < $number) {
        return 'deficient';
    }

    return 'abundant';
}