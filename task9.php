<?php
    function power($a, $n)
    {
        if ($n != 0)
        {
            return $a * power($a, $n - 1);
        }
            return 1;
    }
    echo power(2, 3);
?>