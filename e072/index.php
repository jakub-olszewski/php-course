<?php

    /******************************
     *      Odczyt z pliku
     *****************************
     *
     * fgets(deskryptor, ilosc_znakow)
     *      return odpowiednia ilosc znaków z pliku
     * 
     * feof(deskryptor)
     *      true - osiągnięty koniec pliku
     *      false - nie osiągnięty koniec pliku
     *      
    */

    $nazwa_pliku = "dane.txt";

    if(!$plik = fopen($nazwa_pliku,"r")){
        echo "Nie można otworzyć pliku $nazwa_pliku";
    }else{
        while(!feof($plik)){// dopóki nie ma końca pliku
            $dane = fgets($plik,100);// pobieraj zawartość
            echo "$dane<br>";// wyświetl
        }
        fclose($plik);
    }
    

?>