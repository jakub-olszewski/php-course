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
                    <li>Wyświetli formularz widoczny na rysunku za pomocą skryptu w pliku <code>form_klient.php</code> </li>
                    <li>po wysłaniu prześle dane z formularza do skryptu <code>dodaj_klienta.php</code> i wypisze dane w tym skrypcie</li>
                </ul>  

                <br><br>Po wykonaniu ćwiczenia należy przesłać pliki <code>form_klient.php</code>,<code>dodaj_klienta.php</code>.
                <br><br>Uwaga. Należy odpowiednio czytelnych i jasnych nazw w atrybutach <code>name</code> w formularzu.
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->
                <br><br>
                <img src="image.png" alt="Obraz do zadania" >

            </p><code></code>
        </div>
    </body>
</html>
