<?php

    /**
     *  Definiowanie funkcji
     */
    function wypisz() {
        static $i = 1; // zmienna statyczna
        echo "Funkcja wywołana $i raz(y) <br>"; 
        $i++;
    }

    // wywołanie funkcji
    wypisz();
    wypisz();
    wypisz();

?>

