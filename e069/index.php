<?php

    /******************************
     *      Otwieranie pliku
     ******************************

     * fopen('nazwa_pliku','tryb_otwarcia');
     *     - otwiera istniejący plik
     *     false - plik nie może być otwarty
     *     deskryptor - identyfikator pliku wykorzystywany przez system operacyjny
     *  
     *  r — plik zostanie otwarty w trybie tylko do odczytu
     *  w — plik zostanie otwarty w trybie tylko do zapisu
     *  a — plik zostanie otwarty w trybie dopisywania
     * 
     */
    $nazwa_pliku = "dane.txt";

    $plik = fopen($nazwa_pliku,'r'); // otwarcie pliku do odczytu

?>