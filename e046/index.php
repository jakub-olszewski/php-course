<?php

    /**
     * Funkcja getdate([znacznik_czasu])
     * 
     * - bieżąca data i czas
     */

    $data = getdate();
    $dzien = $data['mday'];
    echo "Dzień miesiąca: " . $dzien . "<br>";

    $miesiac = $data['mon'];

    $rok = $data['year'];

    if($dzien < 10) $dzien = "0" . $dzien;
    if($miesiac < 10) $miesiac = "0" . $miesiac;

    echo "Dziś jest $dzien-$miesiac-$rok" . "<br>";




    $data = getdate(1667348540);
    $dzien = $data['mday'];
    echo "Dzień miesiąca: " . $dzien . "<br>";

    $miesiac = $data['mon'];

    $rok = $data['year'];

    if($dzien < 10) $dzien = "0" . $dzien;
    if($miesiac < 10) $miesiac = "0" . $miesiac;

    echo "Dziś jest $dzien-$miesiac-$rok";
?>

