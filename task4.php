<?php

$i = readline('Введите буквы O, P, D или N - ');

switch ($i) {
    case 'O':
        echo 'Na kogo greh?';
    	  break;
    case 'P':
        echo 'Mi s tobou za odno!';
        break;
    case 'D':
        echo 'Tri raza v zub!';
        break;
    case 'N':
        echo 'Viberay!';
        break;
    default:
       echo 'i не равно D, O, P и N';
}

?>