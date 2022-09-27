<?php

    // zmienna globalna
    $zm = 1;

    /**
     *  Definiowanie funkcji
     */
    function pokaz() {
        global $zm; // instrukcja global
        echo "Wartość zmiennej \$zm wynosi "; 
        echo $GLOBALS['zm'];// dostęp do zmiennej globalnej z wykorzystaniem superglobalnej tablicy $GLOBALS
        echo ". <br>";
    }

    // wywołanie funkcji
    pokaz();

    /**
     *  Funkcje wymagające danych z zewnątrz powinny otrzymywać dane w postaci argumentów
     */
?>

