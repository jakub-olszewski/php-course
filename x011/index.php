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
                Napisz skrypt, który obliczy temperaturę średnią. Posłuż się tablicą <code>$wartosci</code> przechowującą odczytane temperatury:<br>
                <ul>
                    <li><code>$wartosci = [20, 17, 22, 20, 16, 31, 22, 15, 13, -12, 16, 7, 1, 0, -7, -10];</code></li>
                </ul>
                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
            </p><code></code>
            <!-- <br><a href='./answer/index.php'>Odpowiedź</a> -->
        </div>
    </body>
</html>