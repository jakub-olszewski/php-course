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
                    <li>w pliku <code>tworzenie.php</code> utworzy bazę danych <code>moje_kino</code></li>
                    <li>w pliku <code>tworzenie.php</code> utworzy tabelę<code>bilety</code></li>
                    <li>w tabeli<code>bilety</code> utworzy kolumny: <code>nr_biletu, nr_sali, nr_miejsca, nazwa_filmu, godzina, data</code></li>
                    <li>w pliku <code>tworzenie.php</code> doda jeden wiersz do tabeli<code>bilety</code></li>
                    <li>w pliku <code>usuwanie.php</code> usunie wszystkie wiersze w tabeli <code>bilety</code></li>
                    <li>w pliku <code>usuwanie.php</code> usunie tabelę <code>bilety</code></li>
                    <li>w pliku <code>usuwanie.php</code> usunie bazę danych <code>moje_kino</code></li>
                </ul>  

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>imie.nazwisko.zip</code>,
                <br><br>który będzie zawierał plik <code>tworzenie.php</code> oraz <code>usuwanie.php</code>
                <br><br>Uwaga. Wszystkie polecenia muszą być zorientowanie obiektowo.

                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
            <!-- <img src="image.png" alt="Obraz do zadania" > -->

        </div>
    </body>
</html>
