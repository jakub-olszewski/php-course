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
                    <li><code>$pesels = array(81080639434,83050172145,47042863172,58011585821,76100554194,58072885612,89091192832,98010175834,75012151369,55022454151);</code></li>
                    <li>wyszuka w tablicy odpowiedniego numeru PESEL </li>
                    <li>wypisze elementy powyższej tablicy posortowane od największego do najmniejszego</li>
                    <li>po utworzeniu tablicy asocjacyjnej <code>pesel => miasto</code>, gdzie miasta są różne - wypisze pesele i miasta</li>
                    <li>wypisze elementy powyższej tablicy asocjacyjnej posortowane po miastach</li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>Uwaga. Należy użyć funkcji <code>in_array()</code> oraz odpowiednich funkcji sortujących.
                <!--<a href="https://www...">(więcej)</a> -->
            </p><code></code>
        </div>
    </body>
</html>
