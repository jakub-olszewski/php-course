<?php

/**
 * Przesyłanie danych użytkownika
 * 
 * W podanym skrypcie rozpatrywane są trzy sytuacje:
 * - W pierwszej plik cookie nie został utworzony i z formularza
 *   nie zostały przesłane dane — wtedy należy wywołać formularz rejestracyjny.
 * - W drugiej dane z formularza zostały przesłane, ale nie istnieje plik cookie
 *    — wtedy należy utworzyć taki plik.
 * - W trzeciej dane z formularza zostały przesłane oraz istnieje plik cookie 
 *    — wtedy wyświetli się komunikat witający użytkownika po raz kolejny na stronie.
 * 
 * Zapisana w kodzie instrukcja if(!isSet($_COOKIE['dane']) && !isSet($_POST['nazw'])) 
 * sprawdza, czy istnieje plik cookie i czy z formularza został przekazany parametr 
 * zawierający nazwisko i imię użytkownika. Jeżeli nie, to zostanie utworzona strona 
 * zawierająca formularz. Z formularza za pomocą metody POST zostanie przekazany parametr 
 * nazw. Użyty operator ! oznacza negację, a operator && iloczyn logiczny.
 * Druga instrukcja if(isSet($_POST['nazw'] )) sprawdza, czy do skryptu zostały przesłane
 *  dane z formularza. Jeżeli tak, to za pomocą funkcji setcookie() do przeglądarki 
 * jest wysyłany plik cookie o nazwie dane. Jego wartością jest wartość parametru 
 * nazw pobrana z tablicy $_POST. Czas ważności pliku został ustawiony na 236 dni. 
 * Na stronie wyświetli się tekst z podziękowaniem za wprowadzenie danych.
 * Trzecia sytuacja wystąpi, jeśli istnieje plik cookie. Wtedy na stronie wyświetli 
 * się informacja o rozpoznaniu użytkownika.
 */

    if (!isSet($_COOKIE['dane']) && !isSet($_POST['nazw'])){
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Dane_user</title>
        <meta http-equiv="Content-Type" content="text/html;charset= UTF-8">
    </head>
    <body>
        <form action="index.php" method="post">
            Podaj nazwisko i imię:<br/>
            <input type="text" name="nazw" value="" size="35">
            <input type="submit" value="Wyślij" name="wyslij"></p>
        </form>
        <?php
            }else

                if(isSet($_POST['nazw'])){
                    setcookie('dane', $_POST['nazw'], time () + 60*60*24*365 );
                    echo "<p>Dziękujemy za wprowadzenie danych.</p>";
                }else{
                    echo "<p>Witamy po raz kolejny! " . $_COOKIE['dane'] . "</p>";
                }
        ?>
    </body>
</html>