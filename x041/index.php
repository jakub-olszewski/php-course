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
                    <li>tworzy plik cookie z czasem życia 1 minuta.</li>
                    <li>klucz o nazwie <code>today</code> zawiera dzisiejszą datę w formacie YYYY-MM-DD</li>
                </ul>  
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.

            </p><code></code>
        </div>
    </body>
</html>
