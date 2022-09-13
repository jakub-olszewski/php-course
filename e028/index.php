<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>Naprzemienne bloki kodu PHP i HTML</title>
        <link rel="icon" type="image/png" href="/./favicon.png"/>
        <meta charset="utf-8"/>
        <meta name="author" content="Jakub Olszewski">
    </head>
    <body>
        <?php
            /*
                Przełącznik $tx, który steruje wyświetleniem tabeli
            */
            $tx = true;
            if($tx){
        ?>
            <table align="left" border="1" width="400" hspace="40" vspace="20" cellspacing="4">
                <tr><td> Nazwisko</td><td> Imię</td><td> Telefon</td></tr>
                <tr><td> Nowak</td><td> Anna</td><td> +48607394596</td></tr>
                <tr><td> Kowalski</td><td> Jan</td><td> +48505394586</td></tr>
            </table>
        <?php
            }
        ?>
    </body>
</html>