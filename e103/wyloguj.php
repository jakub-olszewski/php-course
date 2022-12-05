<?php

/**
 * Plik: wyloguj.php
 * 
 * Pierwszym poleceniem skryptu jest wywołanie funkcji session_start(). 
 * Następnie jest sprawdzane, czy użytkownik wywołujący procedurę wylogowania był zalogowany. 
 * Jeżeli tak, to następuje usunięcie pliku cookie i zmiennej sesji $_SESSION['log'] oraz 
 * zakończenie sesji (funkcja session_destroy). Jeżeli niezalogowany użytkownik próbuje 
 * uruchomić procedurę wylogowania, pojawia się komunikat informujący o tym.
 *
 */


session_start();
if (isSet($_SESSION['log'])){
    unset($_SESSION['log']);
}else{
    header('location:loguj.php');
    exit();
}
$s = session_destroy();
?>
<! DOCTYPE HTML>
<html>
    <head>
        <title>Koniec sesji</title>
        <meta http-equiv= "Content-Type" content="text/html;charset-UTF-8">
    </head>
    <body>
        <p>Wylogowałes się ze strony.</p>
        <a href = "loguj.php">Logowanie</a>
    </body>
</html>

