<?php
    $salary_vasya = 25000;
    $salary_petya = 30000;

    echo 'В этом году зарплата</br>';
    echo 'Васи'.$salary_vasya.'</br>';
    echo 'Пети'.$salary_petya.'</br>';

    echo 'В следующем году зарплата</br>';
    $salary_vasya = $salary_vasya*1.2;
    $salary_petya = $salary_petya*1.15;
    echo 'Васи'.$salary_vasya.'</br>';
    echo 'Пети'.$salary_petya.'</br>';
