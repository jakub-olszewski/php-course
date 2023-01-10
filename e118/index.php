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

    $tab = "CREATE TABLE Film (Tytul_filmu VARCHAR (30), Rezyser VARCHAR (30), Rok_prod VARCHAR (4)) ";
    
    if ($do_bazy->query($tab)){
        echo "[INFO] Tabela Film została utworzona. <br><br>" ;
    }else{
        echo "[ERROR] Błąd! Nie można utworzyć tabeli Film. <br><br>";
    }

    $wstaw = "INSERT INTO `Film` (`Tytul_filmu`, `Rezyser`, `Rok_prod`) VALUES ('Matrix', 'Wachowski', '1999')";

    if ($do_bazy->query($wstaw)){
        echo "[INFO] Dane poprawnie wstawione. <br><br>" ;
    }else{
        echo "[ERROR] Błąd! Nie wstawić danych. <br><br>";
    }

    $do_bazy->close();
}

?>