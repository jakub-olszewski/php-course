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
                    <li>3 różne posty w HTML zawierający tytuł, treść, datę oraz autora<code></code></li>
                    <li>tytuł, treść, datę oraz autora jedno pod drugim<code></code></li>
                    <li><h3>tytuł</h3>&nbsp; z użyciem <code>header</code>, treść w ramce inną czcionką niż tytuł, datę oraz autora jaśniejszym kolorem niż treść kolorem - użycie odpowiednich styli CSS<code></code></li>
                    <li>Dodatkowo: data użyta jako funkcja <code>date()</code> <a href="https://www.w3schools.com/php/php_date.asp">(więcej)</a></li>
                </ul>
                <br>Należy wykorzystać metodę o nazwie <code>createPost</code>
                <br><br>Przykład użycia: 
                <ul>
                    <li><code>createPost('Nowy rok szkolny','Rozpoczęcie roku szkolnego od 9:00. Zapraszamy chętnych!','Jan Nowak','2022-09-01');</code></li>
                </ul>

                <br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php, style.css</code>.
                <br><br>
            </p><code></code>
        </div>
    </body>
</html>