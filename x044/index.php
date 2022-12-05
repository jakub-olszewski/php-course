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
                    <li>będzie zmodyfikowanym kodem skryptu z poprzedniego przykładu</li>
                    <li>wyświetli informację o liczbie produktów w koszyku</li>
                    <li>będzie nowym skryptem zawierającym wyświetlanie zawartości koszyka<br>
                     i umożliwiał będzie usunięcie z niego wybranych produktów.</li>
                </ul>  
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code> oraz <code>koszyk.php</code>.
                <!-- <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase. -->
                <!-- <a href="https://www.php.net/manual/en/function.str-ends-with.php">str_ends_with</a>. -->

            </p><code></code>
        </div>
    </body>
</html>
