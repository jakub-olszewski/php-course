<?php

/**
 * ============================================
 * Uwierzytelnienie użytkownika
 * ============================================
 * 
 * Plik: strona.php
 * 
 * Po otwarciu sesji sprawdzane jest, czy istnieje zmienna logowania $_SESSION['log']. 
 * Jeżeli zmienna nie istnieje, to znaczy, że niezalogowany użytkownik próbuje otworzyć stronę
 *  — zostanie on przekierowany do strony logowania. Na stronie dostępnej tylko 
 * dla zalogowanych użytkowników wyświetlana jest informacja, że przed jej opuszczeniem 
 * użytkownik powinien się wylogować.
 * 
 * Próba wylogowania wywołuje kolejny skrypt — wyloguj.php. 
 * Skrypt wylogowania zawiera polecenia zakończenia sesji oraz usunięcia jej zmiennych.
 */

session_start();
if (!isSet($_SESSION['log'])){
    header('location:loguj.php');
    exit();
}
?>
<! DOCTYPE HTML>
<html>
    <head>
        <title>Strona główna</title>
        <meta http-equiv= "Content-Type" content="text/html;charset-UTF-8">
    </head>
    <body>
        <p>Jesteś na stronie głównej</p>
        <p>Przed opuszczeniem strony wyloguj sie!</p>
        <a href = "wyloguj.php">Wyloguj</a>
    </body>
</html>