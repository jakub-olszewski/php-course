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
            Napisz skrypt, który wykorzystując kod z poprzedniego zadania będzie wyświetlał : <br>
                <ul>
                    <li>dwukolumnową tabelę HTML z nagłówkiem zawierającą nazwy przedmiotów i oceny<code></code></li>
                </ul>

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
            </p><code></code>
        </div>
    </body>
</html