<?php
    function fib($N) { 
        if ($N > 2) { 
            return fib($N - 1) + fib($N - 2); 
            } else { 
            return 1; 
            } 
        } 
        echo fib(3);
?>