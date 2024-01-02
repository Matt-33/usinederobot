<?php
function generateRandomName() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';

    $randomLetters = substr(str_shuffle($letters), 0, 2);
    $randomNumbers = substr(str_shuffle($numbers), 0, 4);

    return $randomLetters . '-' . $randomNumbers;
}

function reverseString($str) {
    return strrev($str);
}

function generateDate() {
    return date('d m Y') . ' il est ' . date('H:i:s');
}

function generateChoice() {
    return (rand(1, 3) <= 2) ? 'Voulez-vous une boisson chaude ?' : 'Tu veux un cookie ?';
}

function generateRandomNumber() {
    return rand(1, 10);
}

function checkNumberType($number) {
    return ($number % 2 === 0) ? 'pair' : 'impair';
}

function generateFibonacciSequence() {
    $fibonacciSequence = [];
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($i = 2; $i < 100; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return implode(', ', array_slice($fibonacciSequence, 0, 100));
}
?>