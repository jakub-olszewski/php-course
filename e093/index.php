<?php

/**
 * Utworzony w przykładzie plik cookie zostanie zapisany przez przeglądarkę pod nazwą pismo. 
 * Zawartością pliku będzie tekst Na skróty.  Do określenia czasu trwania pliku została 
 * wykorzystana funkcja time(), która zwraca bieżący czas. Do czasu zwróconego przez tę 
 * funkcję został dodany w sekundach czas trwania pliku (3600 s = 1 godz.). 
 * Ustawienie wartości / jako ścieżki dostępu oznacza, że plik będzie dostępny dla 
 * wszystkich stron na serwerze. Domena localhost oznacza, że plik będzie dostępny
 *  na lokalnym serwerze. Ostatni argument ustawiony na false oznacza, że plik cookie
 *  może być przesyłany przez nieszyfrowane połączenia.
 */

setcookie("pismo", "Na skróty", time()+3600, "/", "localhost", false);
if (isSet($_COOKIE["pismo"])){
    echo "<p>Jesteś naszym stałym klientem.</p>" ;
} else {
    echo "<p>Witamy Po raz pierwszy na nasze stronie.</p>";
} 
?>