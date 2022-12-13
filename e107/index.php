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
$do_bazy = mysqli_connect($serwer, $login, $haslo, $baza);

if (mysqli_connect_errno()){
    exit ("Bład połaczenia z serwerem MySQL:" . mysqli_connect_error());
}else{
    echo "Połaczono z serwerem baz danych . <br>";
    mysqli_close($do_bazy);
}

?>