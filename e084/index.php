<html>
<head>
    <title>Formularz rejestracyjny</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
     

<!--
        Podany w przykładzie formularz składa się z czterech pól do wprowadzania tekstu,
        pola wyboru typu radio, pola wyboru typu checkbox oraz przycisków typu submit (Wyślij) oraz reset.

        Po kliknięciu przycisku Wyślij dane z formularza powinny zostać przesłane na serwer za pomocą metody POST. 
        Parametr action wskazuje nazwę skryptu PHP oraz adres serwera, który zostanie wywołany po zatwierdzeniu formularza. 
        W tym przykładzie zostanie uruchomiony skrypt o nazwie skrypt_form.php, który znajduje się na serwerze lokalnym 
        o adresie "skrypt_form.php". 
        Dane wprowadzone do formularza zostaną przekazane do wybranego skryptu. 
        Parametr method określa sposób (metodę) przekazania informacji do wskazanego skryptu. 
        Może przyjąć jedną z dwóch wartości: post i get. 
        Wartością domyślną jest get, ale zaleca się stosowanie metody post.
-->


    <form action="skrypt_form.php" method="post">
        <b><font size="4"><b>Formularz kontaktowy:</font></b><br><br>
        Nazwisko:<br/>
        <input type="text" name="nazw" value-"" size="30"><br>

        Imie:<br/>
        <input type=" text" name="im" value="" size="30 "><br>

        Zawód:<br/>
        <input type="text" name=" zaw" value="" size="30"><br>

        Adres e-mail: <br/>
        <input type="text" name="adr" value="" size="30"><br>

        <b>Wykształcenie:</b><br>
        <input type="radio" value="podst" name="wykszt" checked>Podstawowe<br>
        <input type="radio" value="srednie" name="wykszt">Średnie<br>
        <input type="radio" value="wyzsze"  name="wykszt">Wyższe<br><br>

        <input type="checkbox" name="opcje" maxlength="1">
        Zgadzam się na przetwarzanie moich danych osobowych<br><br>

        <input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp;
        <input type="reset" value="Wyczyść" name="zeruj">
    </form>
</body>
</html>