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
                Utwórz cztery zmienne <code>imię, nazwisko, miasto, kraj</code>. Przypisz im wartości typu <code>string</code> 
                <br>Do tworzenia zmiennych wykorzystaj po kolei każdy z czterech sposobów:
                <br>* użyj znaków apostrofu,<br>* znaków cudzysłow,<br>* składni <code>heredoc</code> <br>* składni <code>nowdoc</code>.
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>
            </p><code></code>
            <br><a href='./answer/index.php'>Odpowiedź</a>
        </div>
    </body>
</html>