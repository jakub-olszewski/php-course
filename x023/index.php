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
                Napisz skrypt, który będzie wyświetlał odpowiedni komunikat w zależności od argumentów wejściowych funkcji : a, b i c  
                <br>Na stronie pojawi się odpowiednio:
                <ul>
                    <li>Równanie ma dwa pierwiastki rzeczywiste: $x1 oraz $x2<code></code></li>
                    <li>Równanie ma jeden pierwiastek rzeczywisty: $x1 <code></code></li>
                    <li>Równanie nie ma pierwiastków rzeczywistych<code></code></li>
                    <li>Wprowadzone dane są błędne!<code></code></li>
                </ul>
                <br>Należy wykorzystać odpowiedni zasięg zmiennych oraz argumenty funkcji przekazywane przez wartość.<code></code>
                <br><br>Nazwa funkcji: <code>obliczPierwiastkiRownaniaKwadratowego($a, $b, $c)</code>
                <br><br>Należy użyć w wywołaniu funkcji przykładów, pojednym z każdego powyższego przypadku.
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>
                <br><br>Uwaga. Pomocna może okazać się funkcja <code>is_numeric($number)</code> oraz <code>sqrt($delta)</code>
                <!--<a href="https://www...">(więcej)</a> -->
            </p><code></code>
        </div>
    </body>
</html>
