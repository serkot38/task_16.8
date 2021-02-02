<?php
    function check($N) {
        $bCheck = true;
        for ($i = 2; $i * $i <= $N; $i++) {
            if ($N % $i == 0) {
                 $bCheck = false;
                 break;
            }              
        }
        if ($bCheck)
            echo 'prime';          
        else
            echo 'composite';
    }
 $x = readline();
 echo check($x);
?>