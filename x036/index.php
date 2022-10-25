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
                    <li>dołącza pliki z poprzednich ćwiczeń wykorzystując <code>include('ścieżka')</code></li>
                    <li>sprawdzi czy plik "<pre><a href="dane.csv">dane.csv</a></pre>" istnieje wykorzystując <code>check_file_exists($nazwa_pliku)</code></li>
                    <li>jeśli plik istnieje przypisze do zmiennej wynik użycia metody <code>read_numbers($nazwa_pliku)</code></li>
                    <li>do a przypisze pierwszy element tablicy <code>$a = $numbers[0];</code></li>
                    <li>do b przypisze drugi element tablicy <code>$b = $numbers[1];</code></li>
                    <li>do c przypisze wynik <code>$c = $a + $b;</code></li>
                    <li>jeśli plik "wynik.csv" istnieje to go usuwa <code>remove_file($nazwa_pliku_wynik)</code></li>
                    <li>zapisze do pliku "wynik.csv" wartość zmiennej c używając <code>save_to_file($nazwa_pliku_do_zapisu, $zawartosc)</code></li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>main.php</code> oraz pozostałe pliki które są w include.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
