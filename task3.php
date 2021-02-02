<?php
    $year = readline('Введите, если год является високосным - ');
    $LeapYear = ((($year%4 == 0) && ($year%100 != 0)) || ($year%400 == 0)) ? 'YES' : 'NO';
    echo $LeapYear;
?>