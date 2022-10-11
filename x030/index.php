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
                    <li>zapisze słowa w jedno słowo zgodnie z 'camel case' zaczynając małą literą</li>
                    <li>Dodatkowo: zamiana polskich liter na łacińskie, czyli ę -> e , ą -> a ...</li>
                </ul>           
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>.
                <br><br>Uwaga. Należy utworzyć funkcje <code>camel_case()</code> argumentem będzie ciąg znaków a w wyniku działania zwróci jedno słowo camelCase.
                <!-- <a href="https://www.w3schools.com/php/func_date_date.asp">(więcej)</a>. -->
                <br><br>Przykład:
                <pre><br>echo camel_case("Nie daj się");
            <br>nieDajSie</pre>
            </p><code></code>
        </div>
    </body>
</html>
