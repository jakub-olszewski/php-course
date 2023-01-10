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
                    <li>wstawi 5 wierszy do tabeli <code>Klient</code></li>
                </ul>  
                <br><br>Uwaga. Uzyj odpowiednich typów kolumn oraz długości.
                <br><br>Po wykonaniu zadania wykonaj zrzut ekranu stworzonej tabeli. Zrzut zapisz w formacie PNG pod nazwą 'utworzona_tabela' . <br>
                Nie kadruj zrzutu. Zrzut powinien obejmować cały ekran monitora, z widocznym paskiem zadań. <br>
                Na zrzucie powinny być widoczne elementy wskazujące na poprawnie wykonaną operację.<br>
                <br><br>W pliku <code>kwerendy.txt</code> zapisz zapytanie tworzące tabelę oraz wstawiające wiersze.
                <br><br>Po wykonaniu ćwiczenia należy przesłać pliki <code>index.php</code>,<code>kwerendy.txt</code>,<code>utworzona_tabela.png</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
        </div>
    </body>
</html>