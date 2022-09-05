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
                Napisz skrypt zmieniający numer dnia na jego nazwę.
                <br>W kodzie wykorzystaj instrukcję sterującą <code>switch</code>.
                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
                Przykład:
                <br>
                <code>
                    <br>$numer = 2;
                    <br>...
                </code>
                <br><br>Wynik wykonania:<br>
                <br>Wtorek.
            </p><code></code>
            <br><a href='./answer/index.php'>Odpowiedź</a>
        </div>
    </body>
</html>