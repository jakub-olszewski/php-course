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
                    <li>zawiera definicje funkcji <code>save_to_file($nazwa_pliku_do_zapisu, $zawartosc)</code> która zapisuje dane do pliku o danej nazwie</li>
                    <li>funkcja tworzy plik jeśli nie istnieje i zapisuje do niego zawartość</li>
                    <li>funkcja tylko dopisuje jeśli plik istnieje</li>
                    <li>zawiera przykład użycia metody <code>save_to_file($nazwa_pliku_do_zapisu, $zawartosc)</code></li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>save_to_file.php</code>
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
