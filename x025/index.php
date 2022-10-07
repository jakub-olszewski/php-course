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
                Napisz skrypt, który do metody <code>obliczPierwiastkiRownaniaKwadratowego</code> z poprzedniego zadania :  
                <ul>
                    <li>ustawi wartość domyślną 0 do zmiennych <code>b</code> oraz <code>c</code></li>
                </ul>           
                <br><br>Należy użyć w wywołaniu funkcji przykładów, pojednym z każdego przypadku, w zależności od użycia wartości domyślnej.
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>
                <br><br>Uwaga. Pomocna może okazać się funkcja <code>rand(od,do)</code> oraz <code>unset(tablica[index])</code>
                <!--<a href="https://www...">(więcej)</a> -->
            </p><code></code>
        </div>
    </body>
</html>
