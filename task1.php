<?php
// Function to print even numbers using a for loop
function printEvenNumbersUsingFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
    echo PHP_EOL; 
}

// Function to print even numbers using a while loop
function printEvenNumbersUsingWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
    echo PHP_EOL;
}

// Function to print even numbers using a do-while loop
function printEvenNumbersUsingDoWhile($start, $end, $step) {
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
    echo PHP_EOL;
}

$start = 2;
$end = 20;
$step = 2;

echo "Using for loop: ";
printEvenNumbersUsingFor($start, $end, $step);

echo "Using while loop: ";
printEvenNumbersUsingWhile($start, $end, $step);

echo "Using do-while loop: ";
printEvenNumbersUsingDoWhile($start, $end, $step);
?>
