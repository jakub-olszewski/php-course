<?php

    /**
     *  Definiowanie funkcji
     */
    function wypisz(&$liczba) { // referencja argumentu 
        $liczba += 3; 
    }

    $liczba = 2;

    echo "Wartość zmiennej \$liczba przed wywołaniem funkcji: $liczba <br>";

    wypisz($liczba);

    echo "Wartość zmiennej \$liczba po wywołaniem funkcji: $liczba <br>";

?>

