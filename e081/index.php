<html>
    <head>
        <title>Opinie użytkowników</title>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body>
        <div style="margin: 30px">
            <form action="skrypt.php" method="post">
            <p><b>Dodaj swoj komentarz na temat globalnego ocieplenia</b><br>
            (Maksymalnie 255 znaków)</p>
            
            <textarea style="margin-bottom: 10px;" name="komentarz" rows="6" cols="50" wrap="virtual"></textarea><br>
            <input type="submit" value="Wyślij">
            <input type="submit" name="clearAll" value="Wyczyść">

        </div>
        </form>
        <div style="margin: 30px">

            <b>Dodane opinie:</b>
            <div>

                <?php
                    $opinie = '';
                    if (file_exists('./opinie.txt')){
                        $opinie = file_get_contents('./opinie.txt');
                        $opinie = nl2br($opinie);
                    }

                    if ($opinie != ''){
                        echo $opinie;
                    }else{
                        echo "Brak opinii na temat globalnego ocieplenia .";
                    }
                ?>

            </div>
        </div>
    </body>
</html>