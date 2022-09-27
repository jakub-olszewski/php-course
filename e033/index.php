<?php

    // zmienna globalna
    $zm = 1;

    /**
     *  Definiowanie funkcji
     */
    function pokaz() {
        global $zm; // instrukcja global
        echo "Wartość zmiennej \$zm wynosi $zm. <br>"; // dostęp do zmiennej globalnej
    }

    // wywołanie funkcji
    pokaz();

    /**
     *  Funkcje wymagające danych z zewnątrz powinny otrzymywać dane w postaci argumentów
     */
?>

