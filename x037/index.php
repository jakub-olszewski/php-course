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
                    
                    <li>przeczyta zawartość kataloku  <code>classroom</code> przy użyciu jednej z metod <code>scandir() lub readdir()</code></li>
                    <li>dla każdego elementu wypisze informację katalog/plik oraz rozmiar</li>
                </ul>   
                <br><br>Do testów skryptu pobierz i wypakuj plik <code><a href="classroom.zip">classroom.zip</a></code> <br>       
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>main.php</code> oraz pozostałe pliki które są w include.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
