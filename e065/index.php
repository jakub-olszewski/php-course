<?php

    /**
     * file_exist('nazwa_pliku');
     *      true - jeśli plik istnieje
     *      false - jeśli nie istnieje
     * 
     */
    $nazwa_pliku = "dane.txt";

    if(file_exists($nazwa_pliku)){
        echo  "Plik istnieje";
        echo "<br>" . getcwd() . "/" . $nazwa_pliku; // ścieżka do pliku
    }else{
        echo  "Plik nie istnieje!";
    }
?>