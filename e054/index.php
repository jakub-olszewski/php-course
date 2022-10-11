<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Jakub Olszewski">
    </head>
    <style>
        p {
            font-weight: bold;
        }
    </style>
    <body>
        <pre>
            <?php

                /**
                 * Funkcje usuwania ciągu znaków
                 * 
                 */

                $tekst = "     Daleka droga przez naukę, krótka i skuteczna przez przykłady.     ";

                echo "'" . $tekst . "'" . "<br><br>";

                echo "<hr>" . "trim :" . "<hr><br>";

                echo "'" . trim($tekst) . "'" . "<br><br>";

                echo "<hr>" . "ltrim :" . "<hr><br>";

                echo "'" .ltrim($tekst) . "'" . "<br><br>";

                echo "<hr>" . "rtrim :" . "<hr><br>";

                echo "'" .rtrim($tekst) . "'" . "<br><br>";
                
                echo "<hr>" . "znak trim :" . "<hr><br>";

                $tekstTrim = trim($tekst);

                echo "'" . trim($tekstTrim,"laD") . "'" . "<br><br>";

            ?>
        </pre>
    </body>
</html>