<?php
    function power($a, $n)
    {
        if ($n != 0)
        {
            return $a * power($a, $n - 1);
        }
            return 1;
    }
    $a = readline();
    $n = readline();
    echo power($a, $n);
?>