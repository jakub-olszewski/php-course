<?php

    $user = "Janek";
    $pass = "hasło";
    $dsn = "mysql:host=localhost;dbname=ksiegarnia";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        echo 'Połaczenie nawiazane!';
    }
    catch (PDOException $e) {
        echo 'Błąd połączenia: ' . $e->getMessage();
        exit;
    }

?>