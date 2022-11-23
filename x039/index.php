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
                    <li>będzie wyświetlał formularz o tytule "Chcesz z nami pracować?"</li>
                    <li>poniżej wyświetli pola: <code>Imie</code>,<code>Nazwisko</code>,<code>Stanowisko</code> </li>
                    <li>Stanowisko zawiera opis: "(1-kucharz, 2- pomoc, 3- kelner, 4- barman)"</li>
                    <li>na dole strony wyświetli przyciski: <code>Wyczyść</code>,<code>Rekrutuj</code> </li>
                    <li>w <code>rekrutacja.php</code> zawiera wyświetlenie przesłanych danych a stanowisko zamiast cyfry wyświetli napis</li>
                </ul>  
                <br><br>Podczas programowania przycisku rekrutuj można wzorować się przyciskiem 'Wyślij' z wcześniejszych przykładów<br>        
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code> oraz <code>rekrutacja.php</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->
            </p><code></code>
        </div>
    </body>
</html>
