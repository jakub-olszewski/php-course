<html>
    <head>
        <title>Formularz - przesyłanie pliku</title>
        <meta http-equiv="content-Type" content="text/html; charset=UTE-8">
    </head>
    <body>
        <form enctype="multipart/form-data" action="odbierz_plik.php" method="post">
            <input type="hidden" name="max_file_size" value="40960">
            <p>Wyślij plik
            <input type="file" name="plik1" size="30"></p>
            <p><input type="submit" value="Wyślij" name="wyslij"></p>
        </form>
    </body>
</html>