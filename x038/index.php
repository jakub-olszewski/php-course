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
                    <li>będzie zawierał formularz z polami <code>imie</code> oraz <code>nazwisko</code> a także przycisk <code>Dodaj</code> </li>
                    <li>poniżej wyświetli "Lista obecności" osób, które dodały się w formularzu powyżej </li>
                    <li>będzie w dwóch plikach <code>main.php</code> oraz <code>functions.php</code></li>
                    <li>w <code>main.php</code> zawiera cała strone z formularzem i lista</li>
                    <li>w <code>functions.php</code> zawiera funkcjonalności PHP wymagane do działania</li>
                </ul>  
                <br><br>Do zapisu listy obecności użyj pliku o nazwie <code>obecnosc.txt</code><br>        
                <br><br>W trakcie pisania kodu można zasugerować się działaniem przykładu z "Praktyczne zastosowania operacji na plikach".<br>       
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>main.php</code> oraz <code>functions.php</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
