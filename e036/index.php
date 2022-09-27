<?php

    /**
     *  Definiowanie funkcji
     */
    function wypisz() {
        $i = 1; // zmienna statyczna jej wartość nie zmienia się po wykonaniu funkcji
        echo "Funkcja wywołana $i raz(y) <br>"; 
        $i++;
    }

    // wywołanie funkcji
    wypisz();
    wypisz();
    wypisz();

?>

