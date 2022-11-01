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
                    <li>wyświetli liczbę dni, które upłyneły od początku roku</li>
                    <li>wyświetli liczbę dni, które pozostały do końca roku</li>
                    <li>wyświetli liczbę dni, które pozostały do końca roku oraz liczbę dni do egzaminu zawodowego</li>
                    <li>wyświetli liczbę dni, które pozostały do początku wakacji</li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>Uwaga. Należy użyć funkcji <code>getdate() time() mktime()</code> <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>.
                <!--<a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a> -->
            </p><code></code>
        </div>
    </body>
</html>
