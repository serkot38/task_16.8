<?php
    $a = readline('Введите минимальное число - ');
    $b = readline('Введите максимальное число - ');
    for ($i = $a; $i <= $b; $i++) {
        if ($i%2 === 0) {
            echo $i;
            echo ' ';
        }
    }
?>