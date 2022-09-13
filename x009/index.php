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
            Zsumuj wszystkie elementy z tablicy:<br>
                <ul>
                    <li><code>$wartosci = [1, 15, 12, 51, 08, -11];</code></li>
                </ul>
                <br>Wykorzystaj pętle for. Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
            </p><code></code>
            <!-- <br><a href='./answer/index.php'>Odpowiedź</a> -->
        </div>
    </body>
</html>