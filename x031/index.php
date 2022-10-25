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
                    <li>zawiera definicje funkcji <code>zliczSlowo($tekst,$szukane_slowo)</code> która zwraca ilość wystąpień tego słowa</li>
                    <li><code>$tekst = "Jadą ludzie po hot doga na stację benzynową, po teściową, po żonę, po dziecko"</code></li>
                    <li>zawiera przykład użycia : <code>zliczSlowo($tekst, "po");</code></li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
