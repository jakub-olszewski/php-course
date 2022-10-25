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
                    <li>zawiera definicje funkcji <code>read_numbers($nazwa_pliku)</code> która zwraca tablicę zawierającą liczbę a oraz b <code>array($a,$b)</code></li>
                    <li>funkcja pobiera liczby z pliku <code>dane.csv</code> oddzielone znakiem <code>,</code></li>
                    <li>funkcja na końcu zamyka plik przy użyciu <code>fclose()</code></li>
                    <li>należy do testów ściągnąć plik<pre> <a href="dane.csv">dane.csv</a> </pre> </li>
                    <li>zawiera przykład użycia metody <code>read_numbers($nazwa_pliku)</code></li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>read_numbers.php</code>
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
