<?php

    /*

    Stałe raz zdefiniowane nie mogą być zmieniane ani usuwane
    Mogą zawierać tyko wartości skalarne

    wykorzystanie funkcji 
    
        define("NAZWA_STALEJ", wartość);

    */

    define("WIEK", 65);
    echo "Wiek emerytalny : " . WIEK . '<br>';

    // stałe predefiniowane

    echo "Wersja PHP : " . PHP_VERSION . '<br>';
    echo "System OS : " . PHP_OS . '<br>';
?>