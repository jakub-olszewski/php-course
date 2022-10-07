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
            Napisz skrypt, który będzie wyświetlał tekst w zależności od argumentu wejsciowego :  
            <br>Na stronie pojawi się odpowiednio:
                <ul>
                    <li>do 4 znaków -> hasło słabe<code></code></li>
                    <li>do 8 znaków -> hasło średnie<code></code></li>
                    <li>brak cyfry -> hasło słabe<code></code></li>
                    <li>brak dużej -> litery hasło słabe<code></code></li>
                    <li>brak małej -> litery hasło słabe<code></code></li>
                    <li>brak znaku -> specjalnego hasło słabe<code></code></li>
                </ul>
                <br>Należy wykorzystać odpowiedni zasięg zmiennych oraz argumenty funkcji przekazywane przez wartość.<code></code>
                <br><br>Nazwa funkcji: <code>passwordStrength($password)</code>
                <br><br>Należy użyć w wywołaniu funkcji przykładów, pojednym z każdego powyższego przypadku.
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>
                <br><br>Uwaga. Pomocna może okazać się funkcja <code>preg_match(pattern, input, matches, flags, offset)</code> <a href="https://www.w3schools.com/php/func_regex_preg_match.asp">(więcej)</a>

            </p><code></code>
        </div>
    </body>
</html>
