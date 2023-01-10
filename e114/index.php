<!DOCTYPE HTML>
<html>
    <head>
        <title>Usuwanie</title>
        <meta http-equiv= "Content-Type" content="text/html;charset-UTF-8">
        <meta chartset="UTF-8">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
<?php

/**
 * ============================================
 * Usuwanie danych
 * ============================================
 * 
 */

$serwer = 'localhost';
$login = 'root';
$haslo ='';
$baza = 'ksiegarnia';

$do_bazy = mysqli_connect($serwer, $login, $haslo, $baza);

if (mysqli_connect_errno()){
    echo "[ERROR] Bład połaczenia z serwerem MySQL:" . mysqli_connect_error() . "<br><br>";
    exit;
}else{
    echo "[INFO] Połaczono z serwerem baz danych . <br><br>";
}

$zapytanie = mysqli_query($do_bazy,'DROP TABLE Film');

if(!$zapytanie){
    mysqli_close();
    echo "Błąd podczas usuwania tabeli Film.<br>";
    exit;
}else{
    echo "Usunięto tabelę Film.<br>";
}

mysqli_close($do_bazy);


?>