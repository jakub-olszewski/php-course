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
            <p><code></code>
                Utwórz tablicę (indeksowaną oraz asocjacyjną z kluczem numer miesiąca => wartość nazwa miesiąca) miesięcy 
                <br>Na początku kodu należy użyć komentarza blokowego zawierającego imię oraz nazwisko.
                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br>W przeglądarce powinna się wyświetlić następująca treść :
                <br><br>
                [<code>nazwa miesiąca Twoich urodzin</code>]<br>
            </p>
            <br><a href='./answer/index.php'>Odpowiedź</a>
        </div>
    </body>
</html>