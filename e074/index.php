<?php

    /******************************
     *      Odczyt z pliku
     *****************************
     *
     * fread(deskryptor, ile_znakow)
     *      return odczyt bloku danych
     *  
     * 
     * fgets reads a line -- i.e. it will stop at a newline.
     * 
     * fread reads raw data -- it will stop after a specified (or default) number of bytes,
     *               independently of any newline that might or might not be present.       
    */

    $nazwa_pliku = "dane.txt";

    if(!$plik = fopen($nazwa_pliku,"r")){
        echo "Nie można otworzyć pliku $nazwa_pliku";
    }else{
        while(!feof($plik)){
            $dane = fread($plik,32);// pobieraj zawartość
            echo "$dane<br>";// wyświetl
        }
        fclose($plik);
    }
    
?>