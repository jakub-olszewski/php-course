<?php
    /* 
    ----------------------------------
            Typy danych
    ----------------------------------
    */

    # wyłączenie znaku specjalngo
    echo 'To jest wyłączenie znaku \' użytego w kodzie PHP <br>';


    /* 
    ----------------------------------
            Typ integer
    ----------------------------------
    */
    # użycie apostrofu
    $i = 234;
    echo 'Zmienna liczbowa ' . $i . '<br>';

    /* 
    ----------------------------------
            Typ boolean
    ----------------------------------
    */
    $hasChange = false;
    $bool = $hasChange ? "true":"false";
    echo 'Zmienna logiczna ' . $bool . '<br>';

    /* 
    ----------------------------------
            Typ float
    ----------------------------------
    */
    $average = 1.69;
    echo 'Zmienna zmiennoprzecinkowa ' . $average . '<br>';

    /* 
    ----------------------------------
            Typ string
    ----------------------------------
    */
    # użycie apostrofu
    $z = 'To jest zmienna typu string. ';
    echo 'Zmienna tekstowa ' . $z . '<br>';

    # użycie cudzysłowu
    $z = "To jest inna zmienna typu string. ";
    echo 'Zmienna tekstowa ' . $z . '<br>';


?>
