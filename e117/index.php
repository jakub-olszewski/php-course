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

    // zapytanie do bazy danych
    $zapytanie = 'SELECT * FROM Klient';
    $wynik = $do_bazy->query($zapytanie);

    if($wynik->num_rows > 0){
        

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

        while($wiersz = $wynik->fetch_assoc()){
            echo "<tr>";
            echo '<td>'.$wiersz["imie"].'</td>';
            echo "<td>".$wiersz['nazwisko']."</td>";
            echo "<td>".$wiersz['kod_pocztowy']."</td>";
            echo "<td>".$wiersz['miejscowosc']."</td>";
            echo "<td>".$wiersz['ulica']."</td>";
            echo "<td>".$wiersz['numer_domu']."</td>";
            echo "<td>".$wiersz['pesel']."</td>";
            echo "<td>".$wiersz['numer_telefonu']."</td>";
            echo "<td>".$wiersz['adres_email']."</td>";
            echo "<td>".$wiersz['id_klienta']."</td>";
            echo "</tr>";
        }   
    
    ?>
    </table>
    <?php
       
    }
    else{
        echo "Brak wierszy <br>";
    }
    ?>
    </body>
    </html>
    <?php

}
    $do_bazy->close();

    ?>
    </body>
</html>