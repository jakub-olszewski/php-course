<?php

    /**
     * touch('nazwa_pliku');
     *     - tworzenie pliku - pusty plik o podanej nazwie
     * 
     * unlink('nazwa_pliku');
     *      true - jeśli plik został usunięty
     *      false - jeśli plik nie został usunięty
     * 
     */
    $nazwa_pliku = "dane.txt";

    $tworzenie_pliku = touch($nazwa_pliku);
    echo  "Tworzenie pliku : ". wypisz($tworzenie_pliku) . "<br>";

    // sprawdzenie czy istnieje
    czyIstnieje($nazwa_pliku);

    sleep(5);// czekanie 5 s

    $usuwanie_pliku = unlink($nazwa_pliku);
    echo  "Usuwanie pliku : ". wypisz($usuwanie_pliku) . "<br>";

    // sprawdzenie czy istnieje
    czyIstnieje($nazwa_pliku);


    /**
     * Wypisanie wartości logicznej
     */
    function wypisz($wartosc){
        return $wartosc ? "pomyślne" :  "nie pomyślne" ;
    }

    function czyIstnieje($nazwa_pliku){
        if(file_exists($nazwa_pliku)){
            echo  "Plik istnieje" . "<br>";
        }else{
            echo  "Plik nie istnieje!" . "<br>";
        }
    }
?>