<?php

    /******************************
     *      exit() and die()
     ****************************
     * 
     * exit([argument])
     *      natychmiastowe zakończenie
     * 
     * die([argument])
     *      natychmiastowe zakończenie
     * 
     * argument - komunikat lub liczba 0-254
     *
    */

    $nazwa_pliku = "dane.txt";

    if(!$plik = fopen($nazwa_pliku,"r")){
        exit("Nie można otworzyć pliku $nazwa_pliku");
    }

?>