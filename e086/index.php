<html>
<head>
    <title>Formularz rejestracyjny</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
     /**

            Wykonaj skrypt a następnie nie uzupełniając formularza kliknij Wyślij
            
            Wytłumacz działanie isSet()
            
      */
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
        <input type="radio" value="podst" name="wykszt">Podstawowe<br>
        <input type="radio" value="srednie" name="wykszt">Średnie<br>
        <input type="radio" value="wyzsze"  name="wykszt">Wyższe<br><br>

        <input type="checkbox" name="opcje" maxlength="1">
        Zgadzam się na przetwarzanie moich danych osobowych<br><br>

        <input type="submit" value="Wyślij" name="wyslij">&nbsp; &nbsp;
        <input type="reset" value="Wyczyść" name="zeruj">

    </form>
</body>
</html>