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
                    <li>na podstawie danych pobranych z funkcji <code>getdate()</code> wyświetli bieżącą datę</li>
                    <li>w dacie nazwa miesiąca będzie w języku polskim</li>
                    <li>format: dzień miesiąc rok - godzina:minuta:sekunda</li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>Uwaga. Należy użyć funkcji <code>date()</code>.
                <!--<a href="https://www...">(więcej)</a> -->
            </p><code></code>
        </div>
    </body>
</html>
