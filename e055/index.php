<?php

    /**
     * Funkcja sprawdzająca długość ciągu
     * 
     * strlen() - długość ciągu znaków
     * 
     * mb_strlen() - długość ciągu znaków uwzględnia kodowanie
     * 
     */

    $napis = "Senatorowie siedzą - czemuż praw nie uchwalą?";

    echo 'Tekst: "' . $napis . '"';

    $dl = mb_strlen($napis);

    echo " ma długość $dl znaków.<br>";

?>