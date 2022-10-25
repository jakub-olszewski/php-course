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
                    <li>zawiera definicje funkcji <code>check_file_exists($nazwa_pliku)</code> która sprawdza czy plik istnieje</li>
                    <li>zwraca <code>true</code> jeśli plik istnieje lub <code>false</code> jeśli nie istnieje</li>
                    <li>funkcja wyświetla komunikat jeśli plik nie istnieje</li>
                    <li>funkcja wyświetla rozmiar pliku jeśli plik istnieje</li>
                    <li>do testów można ściągnąć plik<pre> <a href="dane.csv">dane.csv</a> </pre> </li>
                    <li>zawiera przykład użycia metody <code>check_file_exists($nazwa_pliku)</code> dla istniejącego oraz nie istniejącego pliku</li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>check_file_exists.php</code>
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
