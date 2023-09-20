<?php
function printFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    echo "Fibonacci Series (first $n numbers):\n";

    if ($n >= 1) {
        echo $fibonacci[0] . " ";
    }

    if ($n >= 2) {
        echo $fibonacci[1] . " ";
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        echo $fibonacci[$i] . " ";
    }
}

$n = 15;
printFibonacci($n);

?>
