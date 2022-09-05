<?php
    /* 
    ----------------------------------------------
            Typy danych - Tablice indeksowane
    ----------------------------------------------
    */

    # definicja
    # $tab = array(t1, t2, t3, ... , tn);
    # lub
    # $tab = [t1, t2, t3, ... , tn];

    $ks = array("Matematyka", "Historia i Teraźniejszość", "Informatyka");
    echo 'Książka do przedmiotu: "' . $ks[1] . "\"<br>";

    /*
        Tablica dni tygodnia
    */
    $dzien[0] = "Poniedziałek";
    $dzien[1] = "Wtorek";
    $dzien[2] = "Środa";
    $dzien[3] = "Czwartek";
    $dzien[4] = "Piątek";
    $dzien[5] = "Sobota";
    $dzien[6] = "Niedziela";

    echo 'Dziś jest ' . $dzien[2] . '<br>';

    // w przypadku braku indeksu zostanie on nadany przez PHP automatycznie
    $obecnosc[] = 12;
    $obecnosc[] = 8;
    $obecnosc[] = 2;

    echo 'Obecnych jest ' . $obecnosc[2] . '<br>';



?>
