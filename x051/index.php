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
                    <li>będzie nawiązywał połączenie z bazą danych 'serwis'</li>
                    <li>w przypadku prawidłowego połączenia wyświetli <code>Połaczono z serwerem baz danych .</code></li>
                    <li>w przypadku błędnego połączenia wyświetli <code>Bład połaczenia z serwerem MySQL:" . $do_bazy->connect_error()</code></li>
                </ul>  
                <br><br>Przed wykonaniem zadania ręcznie utwórz bazę 'serwis'. <br>
                Wykonaj zrzut ekranu po utworzeniu. Zrzut zapisz w formacie PNG pod nazwą 'tworzenie_bazy' . <br>
                Nie kadruj zrzutu. Zrzut powinien obejmować cały ekran monitora, z widocznym paskiem zadań. <br>
                Na zrzucie powinny być widoczne elementy wskazujące na poprawnie wykonaną operację.<br>
                <br><br>W pliku <code>kwerendy.txt</code> zapisz zapytanie tworzące bazę danych.
                <br><br>Po wykonaniu ćwiczenia należy przesłać pliki <code>index.php</code>,<code>kwerendy.txt</code>,<code>tworzenie_bazy.png</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
