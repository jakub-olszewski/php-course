<?php

/**
 * ============================================
 * Nawiązanie połączenia
 * ============================================
 * 
 * W podanym kodzie po wywołaniu funkcji mysqli() sprawdzane jest, 
 * czy połączenie zostało nawiązane. Jeżeli tak, to wyświetli się komunikat o uzyskanym połączeniu, 
 * w przeciwnym razie wyświetli się komunikat o braku tego połączenia i program zakończy swoje działanie. 
 * Funkcja connect_error() zwraca kod błędu połączenia, funkcja connect_error() zwraca opis błędu połączenia.
 *
 */

$serwer = 'localhost';
$login = 'root';
$haslo ='';
$baza = 'moja_baza';
$do_bazy = new mysqli($serwer, $login, $haslo, $baza);

if ($do_bazy->connect_error){
    exit ("Bład połaczenia z serwerem MySQL:" . $do_bazy->connect_error());
}else{
    echo "Połaczono z serwerem baz danych . <br>";
}

?>