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
                    <li>będzie nawiązywał połączenie z bazą danych 'ksiegarnia'</li>
                    <li>w przypadku prawidłowego połączenia wyświetli <code>Połaczono z serwerem baz danych .</code></li>
                    <li>w przypadku błędnego połączenia wyświetli <code>Bład połaczenia z serwerem MySQL:" . mysqli_connect_error()</code></li>
                    <li>utworzy tabelę <code>Klient</code> z kolumnami jak w poprzednim zadaniu</li>
                    <li>utworzy pole wyszukaj po numerze pesel oraz przycisk <code>Szukaj</code></li>
                    <li>po kliknięciu w przycisk <code>Rejestruj nowego klienta</code> wyświetli w nowej stronie formularz do dodania nowego klienta oraz link do powrotu do strony głównej</li>
                </ul>  

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>imie.nazwisko.zip</code>,
                <br><br>który będzie zawierał plik <code>dodaj_klienta.php</code> z poprzedniego zadania,
                <br><br>plik <code>szukaj_klienta.php</code> odpowiedzialnego za wyszukanie klienta po numerze pesel, który przekieruje do strony <code>aktualizuj_klienta.php</code> ,
                <br><br>plik <code>aktualizuj_klienta.php</code> odpowiedzialnego za aktualizację klienta i zapis do bazy danych oraz link do powrotu do strony głównej,
                <br><br>plik <code>lista_klientow.php</code> odpowiedzialnego za wyświetlenie tabeli zawierającej wszystkich klientów oraz link do powrotu do strony głównej,
                <br><br>plik <code>index.php</code> zawierający pole do wyszukania, przycisk  <code>Szukaj</code>, przycisk <code>Rejestruj nowego klienta</code><br>
                przycisk <code>Wyświetl wszystkich klientów</code>, który w nowej stronie wyświetli <code>lista_klientow.php</code> - tabelę z wszystkimi rekordami.

                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
            <!-- <img src="image.png" alt="Obraz do zadania" > -->

        </div>
    </body>
</html>
