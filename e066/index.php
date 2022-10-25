<?php

    /**
     * is_file('nazwa_pliku');
     *      true - jeśli to plik 
     *      false - jeśli to nie jest plik 
     * 
     */
    $nazwa_pliku = "dane.txt";

    if(is_file($nazwa_pliku)){
        echo  "To jest plik ";
    }
?>