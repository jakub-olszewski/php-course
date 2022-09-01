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
            Utwórz poniższy napis wypełniają odpowiednie dane : <code>nazwaSzkoly, ulica, numer, kod, miejscowosc, telefon</code>
            <br>Należy stworzyć dwa pliki *.php. Pierwszy zawierający tylko kod PHP drugi zaś z osadzonym kodem PHP w kodzie HTML.
            <br>W przeglądarce powinna wyświetlić się następującą treść:
            <br><br>
            Szkoła: [<code>nazwaSzkoly</code>]<br>
            Adres: [<code>ulica, numer, kod, miejscowosc</code>]<br>
            Telefon: [<code>telefon</code>]<br>
        </p>
        <br><a href='./answer/index.php'>Odpowiedź</a>
    </head>
    </body>
</html>