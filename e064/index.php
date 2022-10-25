<?php

    /**
     * include('ścieżka');
     *      wstawienie w danym miejscu kodu z pliku
     *      gdy plik nie istnieje otrzymujemy ostrzeżenie
     * 
     * require('ścieżka');
     *      wstawienie w danym miejscu kodu z pliku
     *      gdy plik nie istnieje otrzymujemy błąd
     * 
     */

    include ('../e063/index.php'); // ścieżka względna
    include ('/www/course/php/e063/index.php'); // ścieżka bezwzględna
?>