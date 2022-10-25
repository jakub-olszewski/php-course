<?php

    /**
     * filesize('nazwa_pliku');
     *     - wielkość pliku w bajtach
     * 
     */
    $nazwa_pliku = "dane.txt";

    $rozmiar = filesize($nazwa_pliku);
    echo  "Plik $nazwa_pliku ma rozmiar $rozmiar B";
    
?>