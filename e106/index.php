<?php

/**
 * ============================================
 * Nawiązanie połączenia
 * ============================================
 * 
 * W podanym kodzie po wywołaniu funkcji mysqli_connect() sprawdzane jest, 
 * czy połączenie zostało nawiązane. Jeżeli tak, to wyświetli się komunikat o uzyskanym połączeniu, 
 * w przeciwnym razie wyświetli się komunikat o braku tego połączenia i program zakończy swoje działanie. 
 * Funkcja mysqli_connect_errno() zwraca kod błędu połączenia, funkcja mysqli_connect_error() zwraca opis błędu połączenia.
 *
 */

$serwer = 'localhost';
$login = 'root';
$haslo ='';
$baza = 'ksiegarnia';
$do_bazy = mysqli_connect($serwer, $login, $haslo, $baza);

if (mysqli_connect_errno()){
    exit ("Bład połaczenia z serwerem MySQL:" . mysqli_connect_error ());
}else{
    echo "Połaczono z serwerem baz danych . <br>";
}

?>