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
                    <li>w pliku <code>index.php</code> nawiąże połączenie do bazy danych ksiegarnia</code></li>
                    <li>wyświetli formularz zawierający pola odpowiednie do kolumn z tabeli <code>Klient</code> </li>
                    <li>będzie wyświetlał przycisk <code>Wyszukaj</code>, który po wpisaniu peselu wyszuka rekord z bazy danych i uzupełni pozostałe pola</li>
                    <li>będzie wyświetlał przycisk <code>Dodaj</code>, który po uzupełnieniu pól doda do tabeli <code>Klient</code> </li>
                    <li>podczas wykonywania akcji na przycisk <code>Dodaj</code> zweryfikuje (zwaliduje) czy istnieje już osoba o danym peselu, tak by nie było duplikatów</li>
                    <li>będzie wyświetlał <code>alert</code>, z JavaScript w przypadku duplikatu podczas dodawania</li>
                </ul>  

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>imie.nazwisko.zip</code>,
                <br>który będzie zawierał plik <code>index.php</code>
                <br><br><b>Uwaga. Należy wykorzystać bibliotekę PDO.

                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
            <!-- <img src="image.png" alt="Obraz do zadania" > -->

        </div>
    </body>
</html>
