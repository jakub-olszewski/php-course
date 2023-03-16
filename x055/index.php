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
                    <li>w pliku <code>index.php</code> nawiąże połączenie do bazy danych moje_praktyki</code></li>
                    <li>wypisze dane z tabeli <code>harmonogram</code> w postaci tabeli HTML z użytymi stylami (ramka tabeli w kolorze #A74482)</li>
                    <li>w wypisanej tabeli będzie zawierał 7 wierszy w kolumnach <code>dzien (DATE), obowiazki (VARCHAR(128))</code></li>
                </ul>  

                <br>W pliku <code>kwerendy.sql</code> będą znajdować się wszystkie wykonane zapytania do bazy danych,

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>imie.nazwisko.zip</code>,
                <br><br>który będzie zawierał plik <code>index.php</code> oraz <code>kwerendy.sql</code>
                <br><br>Uwaga. Należy wykorzystać bibliotekę PDO. 
                <br><br>Wykonać odpowiednie zapytania tworzące bazę danych, tabelę, użytkownika, nadanie odpowiednich uprawnień 
                <br><br>oraz wstawienie danych do tabeli w postaci 7 wierszy.

                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
            <!-- <img src="image.png" alt="Obraz do zadania" > -->

        </div>
    </body>
</html>
