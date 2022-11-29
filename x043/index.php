<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>ZSE-PHP Ćwiczenie <?php echo ( empty($_GET["number"]) ) ? '' : htmlspecialchars($_GET["number"]) ?></title>
        <meta charset="utf-8"/>
        <meta name="author" content="Jakub Olszewski">
        <link rel="icon" type="image/png" href="./../favicon.png"/>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div style="margin: 50px">
            <h1>Ćwiczenie <?php echo ( empty($_GET["number"]) ) ? '' : htmlspecialchars($_GET["number"]) ?></h1>
            <p>
                Napisz skrypt, który :  
                <ul>
                    <li>będzie zawierał stronę z 2 podstronami <code>cennik i kontakt</code></li>
                    <li>pozwoli na dostęp do stron witryny tylko ze strony głównej</code></li>
                    <li>bezpośrednie wejście na wybraną stronę (z pominięciem strony głównej) zablokuje</li>
                    <li>podczas blokowania wyświetli:</li>
                    <li><code>Nie możesz odczytać tej strony...</code></li>
                    <li><code>Wejdź na nią ze adresu $adres</code></li>
                </ul>  
                <br><br>$adres to wartość zmiennej strony z której możemy wchodzić<br>
                <br><br>Uwaga. Mozesz wykorzystać <code>$_SERVER["HTTP_REFERER"]</code> - zwraca pełny adres URL bieżącej strony<br>
                <br><br>oraz <code> <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a></code> - metoda sprawdza, czy łańcuch kończy się podanym podłańcuchem<br> 
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code> , <code>kontakt.php</code> oraz <code>cennik.php</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
