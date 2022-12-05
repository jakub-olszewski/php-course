<?php

/**
 * Skrypt pokazuje, jak za pomocą zmiennej sesji ile można obliczać 
 * liczbę odwiedzin na stronie. Po otwarciu sesji sprawdzana jest 
 * zawartość tablicy $_SESSION. Jeżeli zmienna sesji ile nie jest 
 * zarejestrowana, zostanie jej przypisana początkowa wartość 0.
 * 
 * Jeżeli jest zarejestrowana, jej wartość zwiększy się o 1. 
 * Następnie wyświetli się komunikat o liczbie odwiedzin.
 */

session_start();
if(!isSet($_SESSION['ile'])){
    $_SESSION['ile'] = 0;
}
$_SESSION['ile']++;

echo "<p>Odwiedziłeś ".$_SESSION['ile']." razy nasze strony.</p>";

// zakończenie sesji
//session_destroy();

?>