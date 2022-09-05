<?php

    /*

    Operatory łańcuchowe

    */

    $zwierze["nazwa"] = 'Kot w butach';
    $zwierze["wiek"] = 5;
    $zwierze["film"] = 'Shrek';

    // łańcuch znakowy
    $napis = $zwierze["nazwa"] . ' z filmu ';

    // wyświetlenie 
    echo $napis . '<br>';

    // dodanie do łańcucha znakowego
    $napis .= $zwierze["film"];

    // wyświetlenie 
    echo $napis;
    
?>