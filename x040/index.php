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
                    <li>będzie zawierał formularz z polami <code>imie, nazwisko, telefon, data</code></li>
                    <li>poniżej wyświetli radiobuttony jednokrotnego wyboru: <code>dowolna godzina, rano, popołudniu, wieczorem</code></li>
                    <li>poniżej wyświetli listę wielokrotnego wyboru usług oraz cen np: barbera </li>
                    <li>na dole formularza będzie zawierał przycisk "Umów"</li>
                    <li>będzie w dwóch plikach <code>index.php</code> oraz <code>functions.php</code></li>
                    <li>w <code>index.php</code> zawiera cała strone z formularzem</li>
                    <li>w <code>functions.php</code> zawiera funkcjonalności PHP wymagane do działania</li>
                </ul>  
                <br><br>Formularz umawia daną osobę na wybraną usługę. Po kliknięciu umów wyświetli dane wypełnione w formularzu i podziękuje za przesłanie.<br>
                <br><br>Dodatkowo: Dane zapisze do pliku o nazwie data_yyyy_mm_dd_telefon.txt<br>
                <br><br>W trakcie pisania kodu można zasugerować się poprzednim ćwiczeniem.<br>
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code> oraz <code>functions.php</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
