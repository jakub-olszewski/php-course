<?php

    try{

        $pdo = new PDO("mysql:host=localhost;dbname=ksiegarnia","root");
        
        $dodaj = $pdo->exec("INSERT INTO Klient (nazwisko, imie, pesel) VALUES ('Kowalski', 'Jan', '92120203443')");

        if ($dodaj > 0 ){
            echo "Dodano: " . $dodaj . " wierszy<br>";
        }else{
            echo "Błąd podczas dodawania danych!<br>";
        }

        $pdo = null;

    }
    catch (PDOException $e) {
        echo 'Błąd połączenia: ' . $e->getMessage();
        exit;
    }


?>