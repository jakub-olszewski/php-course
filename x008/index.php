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
                Napisz skrypt, który w zależności od wartości zmiennej $age umieszcza odpowiedni napis na stronie:<br>
                <ul>
                    <li>jeżeli $age mniejszy od 10, wyświetl: “<code>$age jest mniejsza niż 10</code>”</li>
                    <li>jeżeli $age większy lub równy 20, wyświetl: “<code>$age jest większa lub równa liczbie 20</code>”</li>
                    <li>jeżeli $age większy lub równy 35, wyświetl: “<code>$age jest większa bądź równa 35</code>”</li>
                </ul>
                <br>W kodzie wykorzystaj instrukcję warunkowej <code>if</code> oraz <code>switch</code>.
                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
            </p><code></code>
            <!-- <br><a href='./answer/index.php'>Odpowiedź</a> -->
        </div>
    </body>
</html>