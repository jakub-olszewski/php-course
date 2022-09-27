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
                    <li>średnią temperaturę, wartość minimalną, wartość maksymalną, różnicę pomiędzy najniższą a najwyższą wartością (amplituda)<code></code></li>
                    <li>wyżej wymienione wartości będą jedna pod drugą<code></code></li>
                    <li>temperatura najwyższa będzie miała kolor czerwony a najniższa niebieski, użyj odpowiednich styli z wykorzystaniem <code>class</code></li>
                </ul>
                <br>Należy wykorzystać metody o nazwie <code>weatherMax, weatherMin, weatherAverage, weatherAmplitude</code>
                <br>Wszystkie metody przyjmują tą samą tablicę jako argument (zawierającą 10 wartości od - 30 do 40 i co najmniej jedną wartość ujemną)
                <br><br>Przykład użycia: 
                <ul>
                    <li><code>weatherMax($temperatureTable);</code></li>
                </ul>

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php, style.css</code>.
                <br><br>
            </p><code></code>
        </div>
    </body>
</html>
