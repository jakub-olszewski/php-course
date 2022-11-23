<html>
<head>
    <title>Formularz językowy</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<!--
    
        Gdyby utworzona w formularzu lista wyboru wartości została 
        zdefiniowana w postaci select name="języki" multiple, to 
        skrypt obsługujący formularz miałby dostęp tylko do jednej 
        wartości ($_POST["języki"]). Gdy zostaną dodane kwadratowe 
        nawiasy w podany sposób: select name="języki[]", to elementy 
        wybrane przez użytkownika w polu języki[] będą dostępne 
        w tablicy $_POST["języki"].

-->
    <form action="skrypt_form.php" method= "post">
        Nazwisko
        imię: <br/>
        <input type="text" name="nazw" value=" " size="40"><br>
        <b><font size="4"><b>Wybór jezyka:</font></b><br><br>
        <select name="jezyki[]" multiple>
            <option value="Język angielski"> Język angielski</option>
            <option value="Język niemiecki"> Język niemiecki</option>
            <option value="Jezyk francuski"> Jezyk francuski</option>
            <option value="Język włoski"> Język włoski</option>
            <option value="Język rosyjski"> Język rosyjski</option>
            <option value="Język hiszpański"> Język hiszpański</option>
        </select>
        <p><input type="submit" value="Wyślij" name="wyslij"></p>
    </form>
</body>
</html>