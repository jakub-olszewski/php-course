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
            Napisz skrypt, który będzie wyświetlał : <br>
                <ul>
                    <li>klucze i wartości zmiennych globalnych<code></code></li>
                </ul>
                <br>Należy wykorzystać <code>$GLOBALS</code>
                <br>Przed wypisaniem należy je dodać do tablicy poprzez przypisanie <code>$GLOBALS[klucz] = wartosc;</code>
                <br><br>Poniżej klucze i wartości jakie mają znaleźć się w tablicy: 
                <ul>
                    <li><code>_HOSTNAME = zsepoznan.pl</code></li>
                    <li><code>_IP = 203.212.12.33</code></li>
                    <li><code>_DATABASE_NAME = zsedb</code></li>                   
                </ul>

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
                <br>Uwaga. Wypisanie z użyciem pętli oraz tablicy zawierającej tylko klucze przedstawione wyżej.
            </p><code></code>
        </div>
    </body>
</html>
