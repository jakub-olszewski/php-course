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
        <?php

            /**
             * Funkcja nl2br()
             * - new line to break row
             * 
             */

            $tekst = <<<TX
                Na cóż czekamy, zebrani na rynku?
                Dziś maja tu przyjść barbarzyńcy.
                Dlaczego taka bezczynność w senacie?
                Senatorowie siedza czemuż praw nie uchwalą?
            TX;

            echo "<p>Tekst przed użyciem funkcji nl2br ():</p>";
            echo $tekst . "<br>";

            echo "<p>Tekst po użyciu funkcji nl2br ():</p>";
            echo nl2br($tekst) . "<br>";

        ?>
    </body>
</html>

