<?php

    /******************************
     *      Odczyt z pliku
     *****************************
     *
     * readfile('nazwa_pliku')
     *      return zawartość pliku do przeglądarki i zwraca liczbę odczytanych bajtów.
     *          false - jak się nie powiedzie
     *  
     * 
    */

    $nazwa_pliku = "dane.txt";

    echo readfile($nazwa_pliku);
    
?>