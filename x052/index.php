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
                    <li>będzie nawiązywał połączenie zorientowanie obiektowo z bazą danych 'ksiegarnia' </li>
                    <li>w przypadku prawidłowego połączenia wyświetli <code>Połaczono z serwerem baz danych .</code></li>
                    <li>w przypadku błędnego połączenia wyświetli <code>Bład połaczenia z serwerem MySQL:" . $do_bazy->connect_error()</code></li>
                    <li>utworzy tabelę <code>Klient</code> z kolumnami jak w poprzednim zadaniu</li>
                    <!-- <li>dodaj 5 wierszy do tabeli</li>
                    <li>utwórz pole wyszukaj po numerze pesel </li> -->
                    <li>wstawi wiersz w sposób zorientowany obiektowo do tabeli <code>Klient</code> danymi z formularza (skorzystaj z formularza z poprzedniego zadania) w kliknięciu w przycisk <code>Dodaj</code></li>
                </ul>  
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>imie.nazwisko.zip</code>,
                <br><br>który będzie zawierał plik <code>dodaj_klienta.php</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
            <img src="image.png" alt="Obraz do zadania" >

        </div>
    </body>
</html>
