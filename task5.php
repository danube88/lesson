<?php
    $shares = 1000;

    $john = 100;
    $stolerman = 150;
    $ivan = 235;

    echo 'Джон: ', $john * 100 / $shares, '%<br>';
    echo 'Столерман: ', $stolerman * 100 / $shares, '%<br>';
    echo 'Иван: ', $ivan * 100 / $shares, '%<br>';

    $sale_count = $john + $stolerman + $ivan;

    echo 'Продано: ', $sale_count, '<br>';
    echo 'Не продано: ', $shares - $sale_count, '<br>';
