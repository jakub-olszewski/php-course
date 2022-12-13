<!DOCTYPE HTML>
<html>
    <head>
        <title>Tworzenie tabeli Film</title>
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
 * Zapytanie do bazy danych
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

    $tab = "CREATE TABLE Film (Tytul_filmu VARCHAR (30), Rezyser VARCHAR (30), Rok_prod VARCHAR (4)) ";
    
    if (mysqli_query($do_bazy, $tab)){
        echo "[INFO] Tabela Film została utworzona. <br><br>" ;
    }else{
        echo "[ERROR] Błąd! Nie można utworzyć tabeli Film. <br><br>";
    }

    $wstaw = "INSERT INTO `Film` (`Tytul_filmu`, `Rezyser`, `Rok_prod`) VALUES ('Matrix', 'Wachowski', '1999')";

    if (mysqli_query($do_bazy, $wstaw)){
        echo "[INFO] Dane poprawnie wstawione. <br><br>" ;
    }else{
        echo "[ERROR] Błąd! Nie wstawić danych. <br><br>";
    }

    mysqli_close($do_bazy);
}

?>