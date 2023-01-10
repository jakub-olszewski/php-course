<?php

/**
 * ============================================
 * Kończenie połączenia
 * ============================================
 * 
 */

$serwer = 'localhost';
$login = 'root';
$haslo ='';
$baza = 'ksiegarnia';
$do_bazy = new mysqli($serwer, $login, $haslo, $baza);

if ($do_bazy->connect_error){
    exit ("Bład połaczenia z serwerem MySQL:" . $do_bazy->connect_error());
}else{
    echo "Połaczono z serwerem baz danych . <br>";
    $do_bazy->close();
}

?>