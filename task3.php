<?php
$limit = 10;
$first = 0;
$second = 1;

for ($i = 1; $i <= $limit; $i++) {
    $next = $first + $second;
    echo $next . " ";

    if ($next > 100) {
        break;
    }
    
    $first = $second;
    $second = $next;
}
?>

