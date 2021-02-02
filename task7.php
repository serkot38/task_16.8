<?php
    $N = readline('Введите число - ');
    if ($N == 1) {
        echo 'YES';
    } else {
        while($N >= 2) {
            $N /= 2;
            $a = ($N == 1) ? 'YES' : 'NO';
        }
        echo $a;
    }
?>