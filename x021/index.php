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
            Napisz skrypt, który będzie wyświetlał tekst w zależności od argumentów wejściowych funkcji : wartość wzrostu (cm) oraz wagi (kg) po obliczeniu wartość BMI (kg/m2) 
            <br>Na stronie pojawi się odpowiednio:
                <ul>
                    <li>Wartość BMI<code></code></li>
                    <li>BMI < 18,5: za mało!<code></code></li>
                    <li>BMI > 25: za dużo!<code></code></li>
                    <li>pomiędzy: OK!<code></code></li>

                </ul>
                <br>Należy wykorzystać odpowiedni zasięg zmiennych oraz argumenty funkcji przekazywane przez wartość.<code></code>
                <br>Nazwa funkcji: <code>bmi($wzrost,$waga)</code>, funkcja zwraca wartość BMI.
                <br><br>Należy użyć w wywołaniu funkcji przykładów, pojednym z każdego powyższego przypadku.
                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
            </p><code></code>
        </div>
    </body>
</html>
