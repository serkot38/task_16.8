<?php
    function num($N) {
        if ($N == 1)
        return 0;
        for ($i = 2; $i <= $N/2; $i++) {
            if ($N%$i == 0)
            return 0;
        }
        return 1;
    }

    $N = readline('Введите число - ');
    $a = num($N);
    if ($a == 1) {
        echo 'prime';
    } else {
        echo 'composite';
    }
?>