<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>ZSE-PHP Ćwiczenie <?php echo ( empty($_GET["number"]) ) ? '' : htmlspecialchars($_GET["number"]) ?></title>
        <meta charset="utf-8"/>
        <meta name="author" content="Jakub Olszewski">
        <link rel="icon" type="image/png" href="./../favicon.png"/>
    </head>
    <body>
    
        <h1>Ćwiczenie <?php echo ( empty($_GET["number"]) ) ? '' : htmlspecialchars($_GET["number"]) ?></h1>
        <p>
            Utwórz zmienne <code>nazwaSzkoly, ulica, numer, kod, miejscowosc, telefon</code>
            <br>Na początku kodu należy użyć komentarza blokowego zawierającego imię oraz nazwisko.
            <br>Przed każdą zmienną należy użyć komentarza linii zawierający typ zmiennej.
            <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
            <br>W przeglądarce powinna się wyświetlić następującą treść z użyciem odpowiednich zmiennych:
            <br><br>
            Szkoła: [<code>nazwaSzkoly</code>]<br>
            Adres: [<code>ulica, numer, kod, miejscowosc</code>]<br>
            Telefon: [<code>telefon</code>]<br>
        </p>
        <br><a href='./answer/index.php'>Odpowiedź</a>
    </head>
    </body>
</html>