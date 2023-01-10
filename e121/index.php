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

$do_bazy = new mysqli($serwer, $login, $haslo, $baza);

if ($do_bazy->connect_error){
    echo "[ERROR] Bład połaczenia z serwerem MySQL:" . $do_bazy->connect_error . "<br><br>";
    ?>
    </body>
    </html>
    <?php
    exit;
}else{
    echo "[INFO] Połaczono z serwerem baz danych . <br><br>";
}

$zapytanie = $do_bazy->query('DROP TABLE Film');

if(!$zapytanie){
    $do_bazy->close();
    echo "Błąd podczas usuwania tabeli Film.<br>";
    exit;
}else{
    echo "Usunięto tabelę Film.<br>";
}

$do_bazy->close();


?>