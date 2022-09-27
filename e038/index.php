<?php

    /**
     *  Definiowanie funkcji
     */
    function wypisz($liczba) {
        $liczba += 3; // kopia zmiennej
    }

    $liczba = 2;

    echo "Wartość zmiennej \$liczba przed wywołaniem funkcji: $liczba <br>";

    wypisz($liczba);

    echo "Wartość zmiennej \$liczba po wywołaniem funkcji: $liczba <br>";

?>

