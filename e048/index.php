<?php

    /**
     * Funkcja mktime(
     *  godzina.
     *  minuta.
     *  sekunda, 
     *  miesiac,
     *  dzień,
     *  rok
     * )
     * 
     * - zwraca znacznik czasu 
     * 
     */

    $czas = mktime(8,45,1,10,12,2023);

    echo "Data: dzień, miesiąc, rok, godzina:minuta <br>";

    echo date("d-m-Y G:i",$czas)  . "<br>";

    echo "Data: rok, miesiąc, dzień, godzina:minuta:sekunda <br>";

    echo date("Y-m-d G:i:s",$czas)  . "<br>";

    echo "Teraz: <br>";

    $teraz = time();

    echo date("Y-m-d G:i:s",$teraz)  . "<br>";


?>

