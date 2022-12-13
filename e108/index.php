<!DOCTYPE HTML>
<html>
    <head>
        <title>Odczyt danych z tabeli Klient</title>
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
    ?>
    </body>
    </html>
    <?php
    exit;
}else{
    echo "[INFO] Połaczono z serwerem baz danych . <br><br>";

    // zapytanie do bazy danych
    $zapytanie = mysqli_query($do_bazy,'SELECT * FROM Klient');

    if(!$zapytanie){
        mysqli_close();
        echo "Błąd w zapytaniu <br>";
        ?>
        </body>
        </html>
        <?php
        exit;
    }else{
        ?>
    <table>
        <tr>
            <td>Imię</td>
            <td>Nazwisko</td>            
            <td>Kod pocztowy</td>            
            <td>Miejscowość</td>            
            <td>Ulica</td>            
            <td>Nr domu</td>            
            <td>PESEL</td>            
            <td>Telefon</td>            
            <td>Adres email</td>
            <td>Id klienta</td>           
        </tr>
    <?php
    // wypisanie wierszy z zapytania
        while($wiersz = mysqli_fetch_row($zapytanie)){
            echo "<tr>";
            echo "<td>$wiersz[0]</td>";
            echo "<td>$wiersz[1]</td>";
            echo "<td>$wiersz[2]</td>";
            echo "<td>$wiersz[3]</td>";
            echo "<td>$wiersz[4]</td>";
            echo "<td>$wiersz[5]</td>";
            echo "<td>$wiersz[6]</td>";
            echo "<td>$wiersz[7]</td>";
            echo "<td>$wiersz[8]</td>";
            echo "<td>$wiersz[9]</td>";
            echo "</tr>";
        }   
    ?>
    </table>
    <?php
        mysqli_close($do_bazy);
    }
}
    ?>
    </body>
</html>