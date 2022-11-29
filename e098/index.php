<?php

/**
 * Zliczanie liczby odwiedzin
 * 
 * W podanym kodzie za pomocą funkcji isSet() sprawdzane jest, 
 * czy istnieje plik cookie o nazwie odwiedz. Jeżeli nie, to zmienna
 *  $odw przechowująca liczbę odwiedzin ustawiana jest na 1. 
 * Jeżeli tak, to odczytywana jest z tablicy $_COOKIE wartość pliku odwiedz. 
 * Odczytana wartość za pomocą funkcji intval() jest zamieniana na 
 * liczbę całkowitą i zwiększana o 1. Funkcja intval() jest niezbędna,
 *  ponieważ wartości odczytywane z tablicy $_COOKIE są ciągami znaków.
 * 
 * Po wykonaniu tych czynności do przeglądarki wysyłany jest plik cookie
 *  o nazwie odwiedz. Jego wartością jest liczba odwiedzin zapisana w 
 * zmiennej $odw. Na stronie wyświetli się informacja o liczbie odwiedzin. 
 * Dodatkowo sprawdzana jest wartość zmiennej $odw. Jeżeli wynosi ona 1,
 *  to wyświetlane zdanie będzie kończyło się słowem raz, 
 * dla pozostałych wartości będzie kończyło się słowem razy.
 */

    if (!isSet($_COOKIE['odwiedz'])){
        $odw = 1;
    }else{
        $odw = intval($_COOKIE['odwiedz']) +1;
    }
    setcookie ("odwiedz", $odw, time()+60*60*24*365);
?>
<!DOCTYPE HTML>
<html>
    <head>
    <title>Odwiedziny</title>
    <meta http-equiv="Content-Type" content="text/html;charset-UTF-8">
    </head>

    <body>
    <?php
        if ($odw == 1){
            $wyraz ="raz";
        }else{
            $wyraz="razy";
        }
        echo "W ciagu ostatniego roku odwiedziłeś naszą stronę $odw $wyraz.
        <br/>";

    ?>
    </body>
</html>