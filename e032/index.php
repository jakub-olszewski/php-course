<?php

    // zmienna globalna
    $zm = 1;

    /**
     *  Definiowanie funkcji
     */
    function pokaz() {
        echo "Wartość zmiennej \$zm wynosi $zm. <br>"; // brak dostępu do zmiennej mimo że jest globalna problem charakterystyczny dla języka PHP
    }

    // wywołanie funkcji
    pokaz();

    /**
     *  Funkcje wymagające danych z zewnątrz powinny otrzymywać dane w postaci argumentów
     */
?>

