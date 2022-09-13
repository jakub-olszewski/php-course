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
                Napisz trzy skrypty zliczające kolejne liczby naturalne od 1 do 10 za pomocą pętli 
                <ul>
                    <li><code>for</code> liczby parzyste</li>
                    <li><code>while</code> liczby podzielne przez 3</li>
                    <li><code>do … while</code> liczby którzy suma poprzednich liczb jest podzielna przez 6</li>
                </ul>
                <br>Po wykonaniu ćwiczenia należy przesłać pliki o odpowiednich nazwach 
                <br><code>petla-for.php petla-while.php petla-do-while.php</code>.
                <br><br>
            </p><code></code>
            <!-- <br><a href='./answer/index.php'>Odpowiedź</a> -->
        </div>
    </body>
</html>