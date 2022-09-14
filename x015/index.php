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
            Napisz skrypt, który będzie zawierał : <br>
                <ul>
                    <li>oceny z pięciu przedmiotów w postaci tablicy (tablica asocjacyjna)<code></code></li>
                </ul>
                Wyświetli : <br>
                <ul>
                    <li> <code>nazwę przedmiotu = ocena</code> z wykorzystaniem pętli <code>foreach</code></li>
                </ul>
                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
            </p><code></code>
        </div>
    </body>
</html>
